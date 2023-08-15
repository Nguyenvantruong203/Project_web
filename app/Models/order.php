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
        'id',
    ];

    // public function customer(){
    //     return $this->belongsTo(Customer::class); // 1 order - n customers
    // }
    public function product_detail(){
        return $this->belongsTo(product_detail::class); // 1 order - n customers
    }
}
