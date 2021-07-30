<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
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
        $module = Module::where('id', $id)->first();
        return view('modules.detail', compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::where('id', $id)->first();
        return view('modules.edit', compact('modul'));
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
        $module = Module::findorfail($id);
        $module->delete();

        return redirect('modules')->with('success', 'Modul Archived Successfully!');
    }

    public function archive()
    {
        $modules = Module::onlyTrashed()->get();
        return view('modules.archive', compact('modules'));
    }

    public function restore($id)
    {
        Module::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Modul Successfully Restored!');
    }

    public function kill($id)
    {
        Module::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Modul Deleted Successfully!');
    }
}
