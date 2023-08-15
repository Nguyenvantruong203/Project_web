<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'product_detail_id',
        'description',
        'quantity',
        'size',
        'product_id',
    ];
    public function order(){
        return $this->hasOne(order::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }

}
