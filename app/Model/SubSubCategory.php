<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcat_id','id');
    }
}
