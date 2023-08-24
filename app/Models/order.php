<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'order_id',
        'size',
        'quantity',
        'product_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class); // 1 order - n users
    }
    public function product(){
        return $this->belongsTo(Product::class); // 1 order - n customers
    }

}
