<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
            'level' => ['required'],
            'photo' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'profile_photo_path' => $request->file('photo')->move('uploads/photo', Str::slug($request->name) . '-' . $request->file('photo')->getClientOriginalName())
        ]);

        return redirect('users')->with('success', 'User Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'level' => ['required'],
        ]);

        if ($request->photo) {
            $nameImage = DB::table('users')->where('id', $id)->first();
            File::delete($nameImage->profile_photo_path);
            User::where('id', $id)->update([
                'profile_photo_path' => $request->file('photo')->move('uploads/photo', Str::slug($request->name) . '-' . $request->file('photo')->getClientOriginalName())
            ]);
        }

        if ($request->password) {
            $request->validate([
                'password' => ['string', new Password, 'confirmed']
            ]);

            User::where('id', $id)->update([
                'password' => Hash::make($request->password)
            ]);
        }

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
        ]);

        return redirect('users')->with('success', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        File::delete($user->profile_photo_path);

        return redirect()->back()->with('status', 'Post Berhasil Dihapus Secara Permanen');
    }
}
