<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;

class ProductController extends Controller
{
    public function index()
    {	
    	$manufacturers = Manufacturer::all();

    	return view('admin.product.show', compact('manufacturers'));
    }

    public function add()
    {
    	return view('admin.product.add');
    }
}
