<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\ProductType;
use App\Product;
use Validator;
use File;

class ProductController extends Controller
{
    public function index()
    {	
    	$manufacturers = Manufacturer::all();

    	return view('admin.product.show', compact('manufacturers'));
    }

    public function list($id)
    {
    	$manufacturer = Manufacturer::find($id)->load('product');
    	// dd($manufacturer);
    	$products = $manufacturer->product()->orderBy('created_at','DESC')->paginate(1);
    	
    	return view('admin.product.list', compact('manufacturer','products'));
    }

    public function add($id)
    {
    	$types = ProductType::all();
    	$manufacturer = Manufacturer::find($id);
    	return view('admin.product.add',compact('types','manufacturer'));
    }

    public function doAdd(Request $request, $id)
    {
    	$input = $request->all();

    	$rules = [
    		'name' => 'required|unique:products|max:50',
    		'type_product' => 'required',
    		'amount' => 'required',
    		'price' => 'required',
    		'promotion_price' => 'max:100|min:0',
    		'image1' => 'required|image|max:20480|mimes:jpg,jpeg,png,gif',
    		'image2' => 'required|image|max:20480|mimes:jpg,jpeg,png,gif',
    		'image3' => 'required|image|max:20480|mimes:jpg,jpeg,png,gif'
        	];
        $messages = [
        	'name.required' => 'Name Field Is Required',
        	'name.unique' => 'Name Has Already Been Taken',
        	'name.max' => 'Max Length is 50',
        	'type_product.required' => 'Type Product Field Is Required',
        	'amount.required' => 'Amount Field Is Required',
        	'price.required' => 'Price Field Is Required',
        	'promotion_price.max' => 'Max = 100%',
        	'promotion_price.min' => 'Min = 0%',
        	'image1.required' => 'Image Not Null',
        	'image1.image' => "It's Not Image",
        	'image1.max' => 'Size of Image > 2Kb',
        	'image1.mimes' => '*.jpg,jpeg,png,gif',
        	'image2.required' => 'Image Not Null',
        	'image2.image' => "It's Not Image",
        	'image2.max' => 'Size of Image > 2Kb',
        	'image2.mimes' => '*.jpg,jpeg,png,gif',
        	'image3.required' => 'Image Not Null',
        	'image3.image' => "It's Not Image",
        	'image3.max' => 'Size of Image > 2Kb',
        	'image3.mimes' => '*.jpg,jpeg,png,gif',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if($validator->fails()){
        	return redirect()->route('admin.product.add')->withErrors($validator);
        } else {
        	$image = $request->file('image1');
        	$image_name_1 = time().'-'.$image->getClientOriginalName();
        	$store_path_1 = '/vendor/admin/images/product/image_1/';
        	$destinitionPath = public_path($store_path);
        	$image->move($destinitionPath,$image_name_1);

    		$image = $request->file('image2');
    		$image_name_2 = time().'-'.$image->getClientOriginalName();
    		$store_path_2 = '/vendor/admin/images/product/image_2/';
    		$destinitionPath = public_path($store_path);
    		$image->move($destinitionPath,$image_name_2);

        	$image = $request->file('image3');
        	$image_name_3 = time().'-'.$image->getClientOriginalName();
        	$store_path_3 = '/vendor/admin/images/product/image_3/';
        	$destinitionPath = public_path($store_path);
        	$image->move($destinitionPath,$image_name_3);

        	Product::create([
        		'name' => $input['name'],
        		'type_id' => $input['type_product'],
        		'manufacturer_id' => $id,
        		'amount' => $input['amount'],
        		'price' => $input['price'],
        		'promotion_price' => $input['promotion_price'],
        		'url_image_1' => $store_path_1.$image_name_1,
        		'url_image_2' => $store_path_2.$image_name_2,
        		'url_image_3' => $store_path_3.$image_name_3,
        		'description' => $input['description']
        	]);

        	return redirect()->route('admin.product.list',['id'=>$id]);
        }
    }

    public function edit( $id)
    {
    	$product = Product::find($id);
    	$types = ProductType::all();
    	return view('admin.product.edit', compact('product','types'));
    }

    public function update(Request $request,$id)
    {
    	$input = $request->all();

    	$rules = [
    		'name' => 'required|unique:products,name,'.$id.'|max:50',
    		'type_product' => 'required',
    		'amount' => 'required',
    		'price' => 'required',
    		'promotion_price' => 'max:100|min:0',
    		'image1' => 'image|max:20480|mimes:jpg,jpeg,png,gif',
    		'image2' => 'image|max:20480|mimes:jpg,jpeg,png,gif',
    		'image3' => 'image|max:20480|mimes:jpg,jpeg,png,gif'
        	];
        $messages = [
        	'name.required' => 'Name Field Is Required',
        	'name.unique' => 'Name Has Already Been Taken',
        	'name.max' => 'Max Length is 50',
        	'type_product.required' => 'Type Product Field Is Required',
        	'amount.required' => 'Amount Field Is Required',
        	'price.required' => 'Price Field Is Required',
        	'promotion_price.max' => 'Max = 100%',
        	'promotion_price.min' => 'Min = 0%',        	
        	'image1.image' => "It's Not Image",
        	'image1.max' => 'Size of Image > 2Kb',
        	'image1.mimes' => '*.jpg,jpeg,png,gif',
        	'image2.image' => "It's Not Image",
        	'image2.max' => 'Size of Image > 2Kb',
        	'image2.mimes' => '*.jpg,jpeg,png,gif',
        	'image3.image' => "It's Not Image",
        	'image3.max' => 'Size of Image > 2Kb',
        	'image3.mimes' => '*.jpg,jpeg,png,gif',
        ];

        $validator = Validator::make($input, $rules, $messages);
        
        $types = ProductType::all();
        $product = Product::find($id);
        
        if($validator->fails()){
        	return view('admin.product.edit', compact('product','types'))->withErrors($validator);
        } else {

        	$product->update([
        		'name' => $input['name'],
        		'type_id' => $input['type_product'],
        		'amount' => $input['amount'],
        		'price' => $input['price'],
        		'promotion_price' => $input['promotion_price'],
        		'description' => $input['description']
        	]);
        	
        	if($request->has('url_image_1')){
        		$image = $request->file('image1');
	        	$image_name_1 = time().'-'.$image->getClientOriginalName();
	        	$store_path_1 = '/vendor/admin/images/product/image_1/';
	        	$destinitionPath = public_path($store_path);
	        	$image->move($destinitionPath,$image_name_1);
	        	File::delete(public_path($product->url_image_1));
	        	$product->update([
	        		'url_image_1' => $store_path_1.$image_name_1
	        	]);
        	}

        	if($request->has('url_image_2')){
        		$image = $request->file('image1');
	        	$image_name_2 = time().'-'.$image->getClientOriginalName();
	        	$store_path_2 = '/vendor/admin/images/product/image_2/';
	        	$destinitionPath = public_path($store_path);
	        	$image->move($destinitionPath,$image_name_2);
	        	File::delete(public_path($product->url_image_2));
	        	$product->update([
	        		'url_image_2' => $store_path_2.$image_name_2
	        	]);
        	}

        	if($request->has('url_image_3')){
        		$image = $request->file('image3');
	        	$image_name_3 = time().'-'.$image->getClientOriginalName();
	        	$store_path_3 = '/vendor/admin/images/product/image_3/';
	        	$destinitionPath = public_path($store_path);
	        	$image->move($destinitionPath,$image_name_3);
	        	File::delete(public_path($product->url_image_3));
	        	$product->update([
	        		'url_image_3' => $store_path_3.$image_name_3
	        	]);
        	}

        	return redirect()->route('admin.product.list',['id'=>$product->manufacturer->id]);
        }
    }
}
