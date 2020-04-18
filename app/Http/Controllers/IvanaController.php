<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IvanaController extends Controller
{

    public function about(){
        $products = Product::where('qty', '>=', 3)->get();
        return $products;

//        $product_name = $product->name;
//        $name = 'Ivani';
//        $decko = 'Nebojsa';
//        return view('mojsajt.ivana', compact('name', 'decko', 'product_name'));
    }


}
