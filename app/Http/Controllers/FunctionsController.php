<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Func;

class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcs = Func::all();
        return view('functions.index', compact('funcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('functions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $func = Func::where('id', $id)->first();
        return view('functions.detail', compact('func'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $func = Func::where('id', $id)->first();
        return view('functions.edit', compact('func'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $func = Func::findorfail($id);
        $func->delete();

        return redirect('functions')->with('success', 'Function Archived Successfully!');
    }

    public function archive()
    {
        $funcs = Func::onlyTrashed()->get();
        return view('functions.archive', compact('funcs'));
    }

    public function restore($id)
    {
        Func::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Function Successfully Restored!');
    }

    public function kill($id)
    {
        Func::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Function Deleted Successfully!');
    }
}
