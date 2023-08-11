<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $table = 'product';//đặt tên để gọi được table trong query builder ()
    protected $fillable = [
        // 'product_id',
        'product_name',
        'category_id',
        'price',
        'image',
    ];
    public function product_detail(){
        return $this->hasOne(ProductDetail::class);
    }
    public function category(){
        return $this -> belongsTo(Category::class);
    }

}
