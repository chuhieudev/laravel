<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    // public function children(){
    // 	return $this->hasMany(Category::class,'id','parent_id');
    // }
    public function products(){
    	return $this->belongsToMany(Product::class,'category_product','category_id','product_id');
    }
}
