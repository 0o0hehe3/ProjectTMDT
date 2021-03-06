<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Manufacturer;
use App\ProductType;

class HomeController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(9);

        return view('index', compact('products'));
    }

    public function product_detail($id)
    {
    	$product = Product::find($id);

    	return view('product.detail',compact('product'));
    }

    public function menu_typeProduct($id)
    {
    	$products = ProductType::find($id)->product()->get();
    	$type = ProductType::find($id);

    	return view('menu.typeProduct',compact('products','type'));
    }
}
