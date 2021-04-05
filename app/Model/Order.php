<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderDetails(){
        return $this->belongsTo(OrderDetail::class,'order_no','id');
    }

}
