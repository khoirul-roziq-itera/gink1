<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Func;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use PDF;
use App\Exports\ModulesExport;
use Maatwebsite\Excel\Facades\Excel;

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
        $request->validate([
            'moduleName' => 'required|min:3|max:100|unique:modules,module_Name',
            'moduleStatus' => 'required',
            'funcs' => 'required'
        ]);

        $sumFEDuration = 0;
        $sumFECost = 0;
        $sumFEPrice = 0;
        $sumBEDuration = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        $sumFSDuration = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->funcs;

        for ($i = 0; $i < count($tempReq); $i++) {
            $sumFEDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Duration;
            $sumFECost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Cost;
            $sumFEPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Price;
            $sumBEDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Duration;
            $sumBECost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Cost;
            $sumBEPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Price;
            $sumFSDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Duration;
            $sumFSCost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Cost;
            $sumFSPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Price;
        }

        $module = Module::create([
            'module_Name' => $request->moduleName,
            'module_FE_Duration' => $sumFEDuration,
            'module_FE_Cost' => $sumFECost,
            'module_FE_Price' => $sumFEPrice,
            'module_BE_Duration' => $sumBEDuration,
            'module_BE_Cost' => $sumBECost,
            'module_BE_Price' => $sumBEPrice,
            'module_FS_Duration' => $sumFSDuration,
            'module_FS_Cost' => $sumFSCost,
            'module_FS_Price' => $sumFSPrice,
            'module_Cost_Total' => $sumFECost + $sumBECost + $sumFSCost,
            'module_Price_Total' => $sumFEPrice + $sumBEPrice + $sumFSPrice,
            'module_Notes' => $request->moduleNotes,
            'module_Status' => $request->moduleStatus,
            'user_id' => Auth::id(),
            'module_slug' => Str::of($request->moduleName)->slug('-')
        ]);

        $module->funcs()->attach($request->funcs);

        return redirect('modules')->with('success', 'Module Created Successfully!');
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
        if ($module->module_Status == 1) {
            $moduleStatus = 'Waiting';
        } else if ($module->module_Status == 2) {
            $moduleStatus = 'On Progress';
        } else {
            $moduleStatus = 'Finished';
        }

        $module = Module::where('id', $id)->first();
        return view('modules.detail', compact('module', 'moduleStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcs = Func::all();
        $module = Module::where('id', $id)->first();
        return view('modules.edit', compact('module', 'funcs'));
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
            'moduleName' => 'required|min:3|max:100',
            'moduleStatus' => 'required',
            'funcs' => 'required'
        ]);
        $sumFEDuration = 0;
        $sumFECost = 0;
        $sumFEPrice = 0;
        $sumBEDuration = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        $sumFSDuration = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->funcs;

        for ($i = 0; $i < count($tempReq); $i++) {
            $sumFEDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Duration;
            $sumFECost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Cost;
            $sumFEPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FE_Price;
            $sumBEDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Duration;
            $sumBECost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Cost;
            $sumBEPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_BE_Price;
            $sumFSDuration += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Duration;
            $sumFSCost += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Cost;
            $sumFSPrice += DB::table('functions')->where('id', $tempReq[$i])->first()->function_FS_Price;
        }
        $module = module::findorfail($id);
        $module_data = [
            'module_Name' => $request->moduleName,
            'module_FE_Duration' => $sumFEDuration,
            'module_FE_Cost' => $sumFECost,
            'module_FE_Price' => $sumFEPrice,
            'module_BE_Duration' => $sumBEDuration,
            'module_BE_Cost' => $sumBECost,
            'module_BE_Price' => $sumBEPrice,
            'module_FS_Duration' => $sumFSDuration,
            'module_FS_Cost' => $sumFSCost,
            'module_FS_Price' => $sumFSPrice,
            'module_Cost_Total' => $sumFECost + $sumBECost + $sumFSCost,
            'module_Price_Total' => $sumFEPrice + $sumBEPrice + $sumFSPrice,
            'module_Notes' => $request->moduleNotes,
            'module_Status' => $request->moduleStatus,
            'user_id' => Auth::id(),
            'module_slug' => Str::of($request->moduleName)->slug('-')
        ];

        $module->funcs()->sync($request->funcs);
        $module->update($module_data);

        if ($module->module_Status == 1) {
            $moduleStatus = 'Waiting';
        } else if ($module->module_Status == 2) {
            $moduleStatus = 'On Progress';
        } else {
            $moduleStatus = 'Finished';
        }

        return redirect('modules')->with('success', 'Modules Updated Successfully!');
        // return view('modules.detail', compact('module', 'moduleStatus'));
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

        return redirect('modules')->with('success', 'Module Archived Successfully!');
    }

    public function archive()
    {
        $modules = Module::onlyTrashed()->get();
        return view('modules.archive', compact('modules'));
    }

    public function restore($id)
    {
        Module::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('success', 'Module Restored Successfully!');
    }

    public function kill($id)
    {
        Module::withTrashed()->where('id', $id)->first()->forceDelete();
        DB::table('func_module')->where('module_id', $id)->delete();
        return redirect()->back()->with('success', 'Module Deleted Successfully!');
    }

    public function exportIndexPdf()
    {
        $modules = Module::all();

        view()->share('modules', $modules);
        $pdf = PDF::loadview('modules/pdfindex');
        return $pdf->download('index-modules.pdf');
    }
    public function exportDetailPdf($id)
    {
        $module = Module::where('id', $id)->first();

        view()->share('module', $module);
        $pdf = PDF::loadview('modules/pdfdetail');
        return $pdf->download('detail-modules.pdf');
    }

    public function exportIndexExcel()
    {
        return Excel::download(new ModulesExport, 'index-modules.xlsx');
    }
}
