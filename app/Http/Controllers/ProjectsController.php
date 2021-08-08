<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Category;
use App\Models\Tag;
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
        return view('projects.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app = Application::create([
            'app_name' => $request->appName,
            'category' => $request->category,
            'status' => $request->status,
            'start_project_t' => $request->startProjectT,
            'end_project_t' => $request->endProjectT,
            'deadline_project_t' => $request->deadlineProjectT,
            'cost_total' => $request->costTotal,
            'price_total' => $request->priceTotal,
            'notes' => $request->notes
        ]);

        $app->tags()->attach($request->tags);

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
        Application::where('id', $id)->update([
            'app_name' => $request->appName,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'start_project_t' => $request->startProjectT,
            'end_project_t' => $request->endProjectT,
            'deadline_project_t' => $request->deadlineProjectT
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

        return redirect()->back()->with('success', 'Project Deleted Successfully!');
    }
}
