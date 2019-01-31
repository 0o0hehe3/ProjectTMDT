<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Manufacturer;
class ManufacturerController extends Controller
{
    public function add()
    {
    	return view('admin.manufacturer.add');
    }

    public function doAdd(Request $request)
    {
    	$input = $request->all();
    	$rules = [
    		'name' => 'required|unique:manufacturers',
    		'address' => 'required',
    		'phone_number' => 'required|min:10|max:11',
    	];

    	$validator = Validator::make($input, $rules);

    	if($validator->fails()){
    		return redirect()->route('add.manufacturer')->withInputs($validator);
    	} else {
    		Manufacturer::create([
    			'name' => $input['name'],
    			'address' => $input['address'],
   				'phone_number' => $input['phone_number'],
   				'description' => $input['description'],
    		]);

    		return redirect()->route('admin.index');
    	}
    }
}
