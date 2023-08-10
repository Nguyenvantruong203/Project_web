<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'customer_id',
        'customer_name',
        'email',
        'phone',
        'address',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }

}
