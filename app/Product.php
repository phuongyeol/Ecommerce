<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'manufacture_id','description','origin_price','sale_price','slug'
    ];

    // public function category(){
    // 	return $this->belongTo('App\Category','category_id','id');
    // }
    public function category() {
    	return $this->hasOne('App\Category', 'id', 'category_id');
    }
     public function manufacture() {
    	return $this->hasOne('App\Manufacture', 'id', 'manufacture_id');
    }

    public function product_detail(){
    	return $this->hasONE('App\Product_Detail','product_id','id');
    }
}