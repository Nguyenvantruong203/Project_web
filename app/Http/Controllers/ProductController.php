<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Models\product_detail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $product = product::all();
        return view('home.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addmCart(){
        $result = Product::select('product.*')
        ->join('product_detail', 'product.id', '=', 'product_detail.id')
        ->get();
       // return view('home.cart',compact('result')); 
        return redirect()->route('home.cart')->with('msg', $result) ;  
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
    public function show($id)
    {
        $pro = Product::find($id);
        //$product = Product::where('category.id', $pro->id)->get();
        return view('home.product_detail', compact('pro'));
    }
    // public function addtocart(){
    //     $products = Product::find($id);
    //     //$cart = array();
    //    $cart = session()->get(key('cart'));
    //     if(isset($cart[$id])){
    //         $cart[$id]['quantity']=$cart[$id]['quantity'] + 1;

    //     }else{
    //         $cart[$id] = [
    //             'image' => $products -> image,
    //             //'product_name' => $product ->product_name,
    //             'quantity' =>1,
    //             'price' =>$products -> price
    //         ];
    //     }
    //     session()->put('cart',$cart);
    //   return redirect()->route('addtocart')->with('cart', $cart);       

    // }
    // public function showcart(){

    // }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

    public function AddCart($product, $id){
        $newproduct = ['quanity' => 0, 'price' => $product ->price, 'productInfo' => $product];
        if($this -> products){
            if(array_key_exists($id, $products)){
                $newProduct = $products[$id];
            }
        }
        $newProduct['quantity']+1;
        $newProduct['price'] = $newProduct['quantity'] * $product ->price;
        $this -> product[$id]= $newProduct;
    
    
    }



}
