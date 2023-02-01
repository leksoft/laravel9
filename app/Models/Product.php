<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function rOrder(){

        return $this->belongsToMany(Order::class,OrderDetail::class,'productID','orderId'); 

    }

    
}
