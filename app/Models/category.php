<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'category_name',
    ];

    public function product(){ // mối quan hệ 1- nhiều với product
        return $this->hasMany(Product::class);
}
