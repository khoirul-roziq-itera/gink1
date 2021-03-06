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
use App\Exports\AppsExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

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
            'modules' => 'required',
            'tags' => 'required'
        ]);

        $sumFECost = 0;
        $sumFEPrice = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->modules;

        for ($i = 0; $i < count($tempReq); $i++) {
            $sumFECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Cost;
            $sumFEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Price;
            $sumBECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Cost;
            $sumBEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Price;
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
        $categories = Category::all();
        $tags = Tag::all();
        $modules = Module::all();
        return view('projects.edit', compact('app', 'categories', 'tags', 'modules'));
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
            'appName' => 'required|min:3|max:100',
            'status' => 'required',
            'category' => 'required',
            'modules' => 'required',
            'tags' => 'required'
        ]);

        $sumFECost = 0;
        $sumFEPrice = 0;
        $sumBECost = 0;
        $sumBEPrice = 0;
        $sumFSCost = 0;
        $sumFSPrice = 0;
        $tempReq = $request->modules;

        for ($i = 0; $i < count($tempReq); $i++) {
            $sumFECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Cost;
            $sumFEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FE_Price;
            $sumBECost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Cost;
            $sumBEPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_BE_Price;
            $sumFSCost += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Cost;
            $sumFSPrice += DB::table('modules')->where('id', $tempReq[$i])->first()->module_FS_Price;
        }
        $app = Application::findorfail($id);
        $app_data = [
            'app_name' => $request->appName,
            'app_slug' => Str::of($request->appName)->slug('-'),
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
        ];

        $app->tags()->sync($request->tags);
        $app->modules()->sync($request->modules);

        $app->update($app_data);

        return redirect('projects')->with('success', 'Project Updated Successfully!');
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

        return redirect()->back()->with('success', 'Project Restored Successfully!');
    }

    public function kill($id)
    {
        Application::withTrashed()->where('id', $id)->first()->forceDelete();
        DB::table('application_tag')->where('application_id', $id)->delete();
        DB::table('application_module')->where('application_id', $id)->delete();

        return redirect()->back()->with('success', 'Project Deleted Successfully!');
    }
    public function exportIndexPdf()
    {
        $apps = Application::all();

        view()->share('apps', $apps);
        $pdf = PDF::loadview('projects/pdfindex');
        return $pdf->download('index-projects.pdf');
    }
    public function exportDetailPdf($id)
    {
        $app = Application::where('id', $id)->first();
        $category = DB::table('categories')->where('id',$app->category_id)->get();
        
        view()->share(compact('app'));      
        $pdf = PDF::loadview('projects/pdfdetail');
        return $pdf->download('detail-projects.pdf');
    }

    public function exportIndexExcel()
    {
        return Excel::download(new AppsExport, 'index-projects.xlsx');
    }
}
