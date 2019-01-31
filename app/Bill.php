<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail()
    {
    	return $this->hasMany('App\Bill', 'bill_id', 'id');
    }

    public function bill()
    {
    	return $this->belongsTo('App\Bill', 'user_id', 'id');
    }
}
