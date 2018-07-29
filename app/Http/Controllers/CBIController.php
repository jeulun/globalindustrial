<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class CBIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $products = Product::with('brands')->whereHas('brands', function ($query) {$query->where('slug', 'cbi');
    })->take(8)->inRandomOrder()->get();

        return view('CBI')->with('products', $products);
    }
}
