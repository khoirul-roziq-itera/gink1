<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'tagName' => 'required|min:3|max:20|unique:tags,tag_name'
        ]);

        Tag::create([
            'tag_name' => $request->tagName,
            'tag_slug' => Str::of($request->tagName)->slug('-'),
            'user_id' => Auth::id()
        ]);
        return redirect('tags')->with('success', 'Tag Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::where('id', $id)->first();
        // $apps = Application::where('category_id', $id)->get();
        return view('tags.detail', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $tag = Tag::findorfail($id);
        $tag->delete();

        return redirect('tags')->with('success', 'Tag Archived Successfully!');
    }

    public function archive()
    {
        $tags = Tag::onlyTrashed()->get();
        return view('tags.archive', compact('tags'));
    }

    public function restore($id)
    {
        Tag::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('success', 'Tag Restored Successfully!');
    }

    public function kill($id)
    {
        Tag::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Tag Deleted Successfully!');
    }
}
