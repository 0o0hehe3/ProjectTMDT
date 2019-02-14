<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
    	'name','type_id','manufacturer_id','amount','price','promotion_price','url_image','description','likes_count','views_count'
    ];
    
    public function product_type()
    {
    	return $this->belongsTo('App\ProductType', 'type_id', 'id');
    }
    public function manufacturer()
    {
    	return $this->belongsTo('App\Manufacturer', 'manufacturer_id' , 'id');
    }
    public function bill_detail()
    {
    	return $this->hasMany('App\BillDetail', 'product_id', 'id');
    }
}
