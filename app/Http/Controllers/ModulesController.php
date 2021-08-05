<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Func;

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
        $funcs = Func::all();
        return view('modules.create', compact('funcs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = Module::create([
            'module_Name' => $request->moduleName,
            'module_FE_Duration' => $request->FEDuration,
            'module_FE_Cost' => $request->FECost,
            'module_FE_Price' => $request->FEPrice,
            'module_BE_Duration' => $request->BEDuration,
            'module_BE_Cost' => $request->BECost,
            'module_BE_Price' => $request->BEPrice,
            'module_FS_Duration' => $request->FSDuration,
            'module_FS_Cost' => $request->FSCost,
            'module_FS_Price' => $request->FSPrice,
            'module_Notes' => $request->moduleNotes,
            'module_Status' => $request->moduleStatus
        ]);

        $module->funcs()->attach($request->funcs);

        return redirect('modules')->with('success', 'Module Successfully Created!');
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
