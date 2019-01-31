<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\ProductType;
use Validator;

class TypeProductController extends Controller
{
    public function add()
    {
    	$manufacterers = Manufacturer::all();

    	return view('admin.typeProduct.add', compact('manufacterers'));
    }

    public function doAdd(Request $request)
    {
    	$input = $request->all();
    	$rules = [
    		'name' => 'required|unique',
    		'manufacterer' => 'required'
    	];

    	$validator = Validator::make($input, $rules);

    	if($validator->fails()){
    		return redirect()->route('admin.typeProduct.add')->withInputs($validator);
    	} else {
    		ProductType::create([
    			'name' => $input['name'],
    			'manufacterer_id' => $input['manufacterer'],
    			'description' => $input['description']
    		]);

    		return redirect()->route('admin.product');
    	}
    }
}
