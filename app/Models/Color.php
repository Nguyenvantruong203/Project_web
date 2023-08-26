<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = [
        "color_id",
        "color_code",
        'name'
    ];
    public function product(){ // mối quan hệ 1- nhiều với product
        return $this->hasMany(Product::class);
    }



}
