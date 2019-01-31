<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = "manufacturers";
    protected $fillable = [
        'name', 'address', 'phone_number','description'
    ];

    public function product_type()
    {
    	return $this->hasMany('App\ProductType','manufacturer_id','id');
    }
}
