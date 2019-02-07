<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
    	$products = Product::paginate(9);

        return view('index', compact('products'));
    }
}
