<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function ProductOrder(){
        return $this->hasMany(Product_Order::class,'order_id','id');
    }
}
