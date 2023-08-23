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
        $request->validate(
            [
                'product_name' => 'required|integer',
                'usn' => 'required|min:8',
                'pwd' => 'required|min:8'
            ],
            [
                'product_name.required' => "id ko dc bo trong1",
                'product_name.integer' => "id la so nguyen",
                'usn.required' => "Username ko dc bo trong1",
                'usn.min' => "Username hon 8",
                'pwd.required' => "pass ko dc bo trong3",
                'pwd.min:8' => "pass lon hon 8",

            ]
        );
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
        return redirect(route('adminindex'))->with('status', 'Added product successfully !!');;
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
        if($request->has('uimage')){
            $file = $request->uimage;
            $file_name= $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image'=>$file_name]);
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
