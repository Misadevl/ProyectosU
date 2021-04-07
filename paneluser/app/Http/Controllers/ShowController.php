<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //

    public function index()
    {
        $product  =  Product::all();
        return view('cart', compact('product'));
    }
}
