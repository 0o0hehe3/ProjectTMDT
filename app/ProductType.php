<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
	protected $table = "type_products";

	protected $fillable = [
		'name', 'manufacturer_id', 'description'
	];
	
	public function product()
	{
		return $this->hasMany('App\Product', 'type_id', 'id');
	}

	public function manufacturer()
	{
		return $this->hasMany('App\Manufacturer','type_id','id');
	}
}
