<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
    	'name','type_id','manufacturer_id','amount','price','promotion_price','url_image_1','url_image_2','url_image_3','description'
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
