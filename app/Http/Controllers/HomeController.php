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
    	$types = ProductType::all();
    	$manufacturers = Manufacturer::all();

        return view('index', compact('products','types','manufacturers'));
    }
}
