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
    		'phone_number' => 'required|min:8|max:11',
    	];
        $messages = [
            'name.required' => 'Name Field Is Required',
            'name.unique' => 'Name Has Already Been Taken',
            'address.required' => 'Address Field Is Required',
            'phone_number.required' => 'Phone Number Field Is Required',
            'phone_number.min' => 'Min Length For Phone Number Is 8',
            'phone_number.max' => 'Max Length For Phone Number Is 11'
        ];

    	$validator = Validator::make($input, $rules, $messages);

    	if($validator->fails()){
            $request->flash();
    		return redirect()->route('admin.manufacturer.add')->withErrors($validator);
    	} else {
    		Manufacturer::create([
    			'name' => $input['name'],
    			'address' => $input['address'],
   				'phone_number' => $input['phone_number'],
   				'description' => $input['description'],
    		]);

    		return redirect()->route('admin.manufacturer');
    	}
    }

    public function list()
    {
        $manufacturers = Manufacturer::all();

        return view('admin.manufacturer.list',compact('manufacturers'));
    }
}
