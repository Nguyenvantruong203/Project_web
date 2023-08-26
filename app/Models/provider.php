<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    use HasFactory;
    protected $fillable = [
        "provide_id",
        "provider_name",
        'phone',
        'address'
    ];
    public function product(){ // mối quan hệ 1- nhiều với product
        return $this->hasMany(Product::class);
    }

}
