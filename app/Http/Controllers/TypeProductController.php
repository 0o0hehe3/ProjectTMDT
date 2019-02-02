<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\ProductType;
use Validator;

class TypeProductController extends Controller
{
	public function show()
	{
		$type_products = ProductType::all();

		return view('admin.typeProduct.show', compact('type_products'));
	}
    public function add()
    {
    	return view('admin.typeProduct.add');
    }

    public function doAdd(Request $request)
    {
    	$input = $request->all();
    	$rules = [
    		'name' => 'required|unique:type_products'
    	];

    	$validator = Validator::make($input, $rules);

    	if($validator->fails()){
    		return redirect()->route('admin.typeProduct.add')->withInputs($validator);
    	} else {
    		ProductType::create([
    			'name' => $input['name'],
    			'description' => $input['description']
    		]);

    		return redirect()->route('admin.typeProduct');
    	}
    }
}
