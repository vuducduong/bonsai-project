<?php

namespace App\Http\Controllers;

use App\Models\CategoryParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryParents = CategoryParent::all();
        return view('back-end.category.list', compact('categoryParents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoryParent = new CategoryParent();
        $categoryParent->name = $request->name;
        $categoryParent->description = $request->description;
        $categoryParent->status = $request->status;
        $categoryParent->parent_id = $request->parent_id;
        $categoryParent->save();
        return redirect()->route('category-parent.list');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CategoryParent $categoryParent
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryParent $categoryParent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CategoryParent $categoryParent
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryParent $categoryParent)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CategoryParent $categoryParent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryParent $categoryParent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CategoryParent $categoryParent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryParent $categoryParent)
    {
        //
    }

    public function display($id)
    {
        DB::table('category_parents')->where('id', $id)->update(['status' => 0]);
        return redirect()->route('category-parent.list');
    }

    public function hide($id)
    {
        DB::table('category_parents')->where('id', $id)->update(['status' => 1]);
        return redirect()->route('category-parent.list');
    }

    public function displayVertical($id){
        DB::table('category_parents')->where('id', $id)->update(['parent_id' =>0]);
        return redirect()->route('category-parent.list');
    }

    public function hideVertical($id){
        DB::table('category_parents')->where('id', $id)->update(['parent_id' =>1]);
        return redirect()->route('category-parent.list');
    }
}
