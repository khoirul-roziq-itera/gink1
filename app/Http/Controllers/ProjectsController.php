<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Module;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = Application::all();

        return view('projects.index', compact('apps',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $modules = Module::all();
        return view('projects.create', compact('categories', 'tags', 'modules'));
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
            'appName' => 'required|min:3|max:100||unique:applications,app_name',
            'status' => 'required',
            'category' => 'required',
            'FEDuration' => 'numeric|min:0|max:100',
            'FECost' => 'numeric|min:0',
            'FEPrice' => 'numeric|min:0',
            'BEDuration' => 'numeric|min:0|max:100',
            'BECost' => 'numeric|min:0',
            'BEPrice' => 'numeric|min:0',
            'FSDuration' => 'numeric|min:0|max:100',
            'FSCost' => 'numeric|min:0',
            'FSPrice' => 'numeric|min:0',
        ]);

        // $sumFEDuration = 0;
        $sumFECost = 0;
        $sumFEPrice = 0;
        // $sumBEDuration = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        // $sumFSDuration = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->modules;

        for ($i = 0; $i < count($tempReq); $i++) {
            // $sumFEDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->function_FE_Duration;
            $sumFECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Cost;
            $sumFEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Price;
            // $sumBEDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Duration;
            $sumBECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Cost;
            $sumBEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Price;
            // $sumFSDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Duration;
            $sumFSCost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Cost;
            $sumFSPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Price;
        }
        $app = Application::create([
            'app_name' => $request->appName,
            'app_slug' => Str::of($request->appName)->slug('-'),
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            'status' => $request->status,
            'start_project_t' => $request->startProjectT,
            'end_project_t' => $request->endProjectT,
            'deadline_project_t' => $request->deadlineProjectT,
            'app_FE_Cost' => $sumFECost,
            'app_FE_Price' => $sumFEPrice,
            'app_BE_Cost' => $sumBECost,
            'app_BE_Price' => $sumBEPrice,
            'app_FS_Cost' => $sumFSCost,
            'app_FS_Price' => $sumFSPrice,
            'app_Cost_Total' => $sumFECost + $sumBECost + $sumFSCost,
            'app_Price_Total' => $sumFEPrice + $sumBEPrice + $sumFSPrice,
            'app_notes' => $request->notes
        ]);

        $app->tags()->attach($request->tags);
        $app->modules()->attach($request->modules);

        return redirect('projects')->with('success', 'Project Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = Application::where('id', $id)->first();
        return view('projects.detail', compact('app'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $app = Application::where('id', $id)->first();
        return view('projects.edit', compact('app'));
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
        // $sumFEDuration = 0;
        $sumFECost = 0;
        $sumFEPrice = 0;
        // $sumBEDuration = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        // $sumFSDuration = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->modules;

        for ($i = 0; $i < count($tempReq); $i++) {
            // $sumFEDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->function_FE_Duration;
            $sumFECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Cost;
            $sumFEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Price;
            // $sumBEDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Duration;
            $sumBECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Cost;
            $sumBEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Price;
            // $sumFSDuration += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Duration;
            $sumFSCost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Cost;
            $sumFSPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Price;
        }
        Application::where('id', $id)->update([
            'app_name' => $request->appName,
            'app_slug' => Str::of($request->appName)->slug('-'),
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            'status' => $request->status,
            'start_project_t' => $request->startProjectT,
            'end_project_t' => $request->endProjectT,
            'deadline_project_t' => $request->deadlineProjectT,
            'app_FE_Cost' => $sumFECost,
            'app_FE_Price' => $sumFEPrice,
            'app_BE_Cost' => $sumBECost,
            'app_BE_Price' => $sumBEPrice,
            'app_FS_Cost' => $sumFSCost,
            'app_FS_Price' => $sumFSPrice,
            'app_Cost_Total' => $sumFECost + $sumBECost + $sumFSCost,
            'app_Price_Total' => $sumFEPrice + $sumBEPrice + $sumFSPrice,
            'app_notes' => $request->notes
        ]);

        return redirect('projects')->with('success', 'Project Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $app = Application::findorfail($id);
        $app->delete();

        return redirect('projects')->with('success', 'Project Archived Successfully!');
    }

    public function archive()
    {
        $apps = Application::onlyTrashed()->get();
        return view('projects.archive', compact('apps'));
    }

    public function restore($id)
    {
        Application::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Project Successfully Restored!');
    }

    public function kill($id)
    {
        Application::withTrashed()->where('id', $id)->first()->forceDelete();
        DB::table('application_tag')->where('application_id', $id)->delete();
        DB::table('application_module')->where('application_id', $id)->delete();

        return redirect()->back()->with('success', 'Project Deleted Successfully!');
    }
}
