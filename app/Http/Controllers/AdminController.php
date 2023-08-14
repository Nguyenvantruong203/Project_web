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
        if($request->has('uimage')){
            $file = $request->uimage;
            $file_name= $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image'=>$file_name]);
        $product = new Product();
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
        return view('admin.edit', compact('product', 'cate'))->with('status', 'Edited product successfully !!');;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect(route('adminindex'))->with('status', 'Added product successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return redirect(route('adminindex'))->with('status', 'Deleted product successfully!!');
    }
}