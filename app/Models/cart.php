<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    // public function addCart(){
    //     $result = Product::select('product.*')
    //     ->join('product_detail', 'product.id', '=', 'product_detail.id')
    //     ->get();
    //     return redirect()->route('home.cart')->with('msg', $result) ; 
    // }
}
