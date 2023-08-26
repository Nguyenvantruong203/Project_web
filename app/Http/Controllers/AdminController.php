<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\Color;
use App\Models\provider;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        $cate = category::all();
        $color = color::all();
        $provider = provider::all();
        return view('admin.homeadmin', compact('product', 'cate', 'color','provider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'product_name' => 'required|min:10',
                'price' => 'required|numeric',

            ],
            [
                'product_name.required' => "Không được để trống",
                'product_name.min' => "Nhập ít nhất 10 ký tự",

                'price.required' => "Không được để trống",
                'price.numeric' => "Phải nhập số",
            ]
        );
        if($request->has('uimage')){//kiểm tra xem ảnh đã được tải lên chưa
            $file = $request->uimage;//gán cái ảnh tải lên vào biến file
            $file_name= $file->getClientOriginalName();//getClientOriginalName để lấy tên gốc của ảnh
            $file->move(public_path('uploads'), $file_name);//move chuyển tệp hình ảnh vào thư mục uploads
        }
        $request->merge(['image'=>$file_name]);//merge để cập nhật giá trị của trường image trong yêu cầu với tên tệp hình ảnh đã tải lên.
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->size = $request->size;
        $product->description = $request->description;
        $product->color_id = $request->color_id;
        $product->provider_id = $request->provider_id;
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
        $provider = provider::all();
        $color = color::all();
        return view('admin.edit', compact('product', 'cate', 'provider', 'color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'product_name' => 'required|min:10',
                'price' => 'required|numeric',

            ],
            [
                'product_name.required' => "Không được để trống",
                'product_name.min' => "Nhập ít nhất 10 ký tự",

                'price.required' => "Không được để trống",
                'price.numeric' => "Phải nhập số",
            ]
        );
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
        $product->quantity = $request->quantity;
        $product->size = $request->size;
        $product->description = $request->description;
        $product->color_id = $request->color_id;
        $product->provider_id = $request->provider_id;
        $product->save();
        return redirect(route('adminindex'))->with('status', 'Updated product successfully !!');
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
