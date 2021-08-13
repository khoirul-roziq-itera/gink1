<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Func;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


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
        $request->validate([
            'funcTitle' => 'required|min:3|max:100|unique:functions,function_Title',
            'funcName' => 'required|min:3|max:100|unique:functions,function_Name',
            'funcGroup' => 'required',
            'FEDuration' => 'numeric|min:0|max:100',
            'FECost' => 'numeric|min:0',
            'FEPrice' => 'numeric|min:0',
            'BEDuration' => 'numeric|min:0|max:100',
            'BECost' => 'numeric|min:0',
            'BEPrice' => 'numeric|min:0',
            'FSDuration' => 'numeric|min:0|max:100',
            'FSCost' => 'numeric|min:0',
            'FSPrice' => 'numeric|min:0',
            'funcStatus' => 'required'
        ]);

        Func::create([
            'function_Title' => $request->funcTitle,
            'function_Name' => $request->funcName,
            'function_slug' => Str::of($request->funcName)->slug('-'),
            'user_id' => Auth::id(),
            'function_Group' => $request->funcGroup,
            'function_FE_Duration' => $request->FEDuration,
            'function_FE_Cost' => $request->FECost,
            'function_FE_Price' => $request->FEPrice,
            'function_BE_Duration' => $request->BEDuration,
            'function_BE_Cost' => $request->BECost,
            'function_BE_Price' => $request->BEPrice,
            'function_FS_Duration' => $request->FSDuration,
            'function_FS_Cost' => $request->FSCost,
            'function_FS_Price' => $request->FSPrice,
            'function_Notes' => $request->funcNotes,
            'function_Status' => $request->funcStatus
        ]);

        return redirect('functions')->with('success', 'Function Created Successfully!');
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
        if ($func->function_Status == 1) {
            $funcStatus = 'Waiting';
        } else if ($func->function_Status == 2) {
            $funcStatus = 'On Progress';
        } else {
            $funcStatus = 'Finished';
        }

        return view('functions.detail', compact('func', 'funcStatus'));
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
        $request->validate([
            'funcTitle' => 'required|min:3|max:100',
            'funcName' => 'required|min:3|max:100',
            'funcGroup' => 'required',
            'FEDuration' => 'numeric|min:0|max:100',
            'FECost' => 'numeric|min:0',
            'FEPrice' => 'numeric|min:0',
            'BEDuration' => 'numeric|min:0|max:100',
            'BECost' => 'numeric|min:0',
            'BEPrice' => 'numeric|min:0',
            'FSDuration' => 'numeric|min:0|max:100',
            'FSCost' => 'numeric|min:0',
            'FSPrice' => 'numeric|min:0',
            'funcStatus' => 'required'
        ]);

        Func::where('id', $id)->update([
            'function_Title' => $request->funcTitle,
            'function_Name' => $request->funcName,
            'function_Group' => $request->funcGroup,
            'function_FE_Duration' => $request->FEDuration,
            'function_FE_Cost' => $request->FECost,
            'function_FE_Price' => $request->FEPrice,
            'function_BE_Duration' => $request->BEDuration,
            'function_BE_Cost' => $request->BECost,
            'function_BE_Price' => $request->BEPrice,
            'function_FS_Duration' => $request->FSDuration,
            'function_FS_Cost' => $request->FSCost,
            'function_FS_Price' => $request->FSPrice,
            'function_Notes' => $request->funcNotes,
            'function_Status' => $request->funcStatus
        ]);
        return redirect('functions')->with('success', 'Function Updated Successfully!');
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

        return redirect()->back()->with('status', 'Function Restored Successfully!');
    }

    public function kill($id)
    {
        Func::withTrashed()->where('id', $id)->first()->forceDelete();

        return redirect()->back()->with('success', 'Function Deleted Successfully!');
    }
}
