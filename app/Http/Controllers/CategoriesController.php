<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
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
            'categoryName' => 'required|min:3|max:20|unique:categories,category_name'
        ]);

        Category::create([
            'category_name' => $request->categoryName,
            'category_slug' => Str::of($request->categoryName)->slug('-'),
            'user_id' => Auth::id()
        ]);

        return redirect('categories')->with('success', 'Category Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $categorie = Category::findorfail($id);
        $categorie->delete();

        return redirect('categories')->with('success', 'Category Archived Successfully!');
    }

    public function archive()
    {
        $categories = Category::onlyTrashed()->get();
        return view('categories.archive', compact('categories'));
    }

    public function restore($id)
    {
        Category::withTrashed()->where('id', $id)->first()->restore();

        return redirect()->back()->with('status', 'Category Successfully Restored!');
    }

    public function kill($id)
    {
        Category::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Category Deleted Successfully!');
    }
}
