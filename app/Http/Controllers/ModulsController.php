<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class ModulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduls = Modul::all();
        return view('moduls.index', compact('moduls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moduls.create');
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
        $modul = Modul::where('id', $id)->first();
        return view('moduls.detail', compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modul = Modul::where('id', $id)->first();
        return view('moduls.edit', compact('modul'));
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
        $modul = Modul::findorfail($id);
        $modul->delete();

        return redirect('moduls')->with('success', 'Modul Archived Successfully!');
    }

    public function archive()
    {
        $moduls = Modul::onlyTrashed()->get();
        return view('moduls.archive', compact('apps'));
    }

    public function restore($id)
    {
        Modul::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Modul Successfully Restored!');
    }

    public function kill($id)
    {
        Modul::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Modul Deleted Successfully!');
    }
}
