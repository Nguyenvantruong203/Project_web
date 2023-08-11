<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        $cate = category::all();
        return view('admin.homeadmin', compact('product', 'cate'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product = new Product();
        // $product->product_id = $request->id;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect(route('adminindex'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = product::find($id);
        $cate = category::all();
        return view('admin.edit', compact('product', 'cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
