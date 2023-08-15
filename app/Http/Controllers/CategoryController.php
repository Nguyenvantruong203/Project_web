<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all();
        return view('admin.categoryAdmin', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = new category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect(route('indexcategory'))->with('status', 'Added product successfully!!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $category = category::find($id);
        $cate = category::all();
        return view('admin.editcategory', compact('category', 'cate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request ,$id)
    {
        $category = category::find($id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect(route('indexcategory'))->with('status', 'Updated product successfully!!');;
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     */
    public function destroy(string $id)
    {
        category::destroy($id);
        return redirect(route('indexcategory'))->with('status', 'Deleted product successfully!!');

    }
}
