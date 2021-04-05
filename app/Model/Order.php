<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderDetails(){
        return $this->belongsTo(OrderDetail::class,'order_no','id');
    }
    public function method(){
        return $this->belongsTo(Payment::class,'payment_id','id');
    }
    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id','id');
    }

}
