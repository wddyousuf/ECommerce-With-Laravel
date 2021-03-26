<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
