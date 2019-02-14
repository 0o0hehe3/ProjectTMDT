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

    public function list(Request $request, $id)
    {
    	$manufacturer = Manufacturer::find($id)->load('product');
    
    	$products = $manufacturer->product()->orderBy('updated_at','DESC')->paginate(5);

    	if($request->ajax()){
    		$view = view('admin.product.content',compact('products'))->render();
    		return response()->json([
    			'html' => $view,
    			'hasMore' => $products->hasMorePages(),
    			'url' => $products->nextPageUrl()
    		]);
    	}
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
    		'image1' => 'required|image|max:20480|mimes:jpg,jpeg,png,gif',
        	];
        $messages = [
        	'name.required' => 'Name Field Is Required',
        	'name.unique' => 'Name Has Already Been Taken',
        	'name.max' => 'Max Length is 50',
        	'type_product.required' => 'Type Product Field Is Required',
        	'image1.required' => 'Image Not Null',
        	'image1.image' => "It's Not Image",
        	'image1.max' => 'Size of Image > 2Kb',
        	'image1.mimes' => '*.jpg,jpeg,png,gif',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if($validator->fails()){
            $request->flash();
        	return redirect()->route('admin.product.add')->withErrors($validator);
        } else {

        	$image = $request->file('image1');
        	$image_name = time().'-'.$image->getClientOriginalName();
        	$store_path = '/vendor/admin/images/product/image/';
        	$destinitionPath = public_path($store_path);
        	$image->move($destinitionPath,$image_name);

        	Product::create([
                'name' => $input['name'],
                'url_image' => $store_path.$image_name,
                'type_id' => $input['type_product'],
                'description' => $input['description'],
                'manufacturer_id' => $id
            ]);

        	return redirect()->route('admin.product.list',['id'=>$id]);
        }
    }

    public function edit($id)
    {
    	$product = Product::find($id);
    	$types = ProductType::all();
    	return view('admin.product.edit', compact('product','types'));
    }

    public function update(Request $request,$id)
    {
    	$input = $request->all();
        $types = ProductType::all();
        $product = Product::find($id);

    	$rules = [
    		'name' => 'required|unique:products,name,'.$id.'|max:50',
    		'type_product' => 'required',
    		'image1' => 'image|max:20480|mimes:jpg,jpeg,png,gif',
            'description' => 'required'
        	];
        $messages = [
        	'name.required' => 'Name Field Is Required',
        	'name.unique' => 'Name Has Already Been Taken',
        	'name.max' => 'Max Length is 50',
        	'type_product.required' => 'Type Product Field Is Required',
            'description.required' => 'Desciption Field Is Required',
        	'image1.image' => "It's Not Image",
        	'image1.max' => 'Size of Image > 2Kb',
        	'image1.mimes' => '*.jpg,jpeg,png,gif',
        ];

        $validator = Validator::make($input, $rules, $messages);       
        
        if($validator->fails()){
        	return view('admin.product.edit', compact('product','types'))->withErrors($validator);
        } else {
        	$update_columns = [
        		'name' => $input['name'],
        		'type_id' => $input['type_product'],
        		'description' => $input['description']
        	];

        	if($request->has('image1')){
        		$image = $request->file('image1');
	        	$image_name = time().'-'.$image->getClientOriginalName();
	        	$store_path = '/vendor/admin/images/product/image/';
	        	$destinitionPath = public_path($store_path);
	        	$image->move($destinitionPath,$image_name);
	        	File::delete(public_path($product->url_image));
	        	$update_columns['url_image'] = $store_path.$image_name;
        	}

            $product->update($update_columns);
        	return redirect()->route('admin.product.list',['id'=>$product->manufacturer->id]);
        }
    }

    public function delete($id_manu,$id,Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        File::delete(public_path($product->url_image));
        $request->session()->flash('product_delete','Xóa thành công sản phẩm '.$product->name);
        return redirect()->route('admin.product.list',['id'=>$id_manu]);
    }
}
