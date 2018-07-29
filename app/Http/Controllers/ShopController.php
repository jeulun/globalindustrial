<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop')->with([
            'products' => $this->showcategory()->get('products'),
            'categories' => $this->showcategory()->get('categories'),
            'categoryName' => $this->showcategory()->get('categoryName'),
            'products' => $this->showbrand()->get('products'),
            'brands' => $this->showbrand()->get('brands'),
            'brandName' => $this->showbrand()->get('brandName'),
        ]);
    }

    public function showcategory()
    {
        $pagination = 9;
        $categories = Category::all();

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }


        return collect([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }

    public function showbrand()
    {
        $pagination = 9;
        $brands = Brand::all();

        if (request()->brand) {
            $products = Product::with('brands')->whereHas('brands', function ($query) {
                $query->where('slug', request()->brand);
            });
            $brandName = optional($brands->where('slug', request()->brand)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $brandName = 'Featured';
        }

        return collect([
            'products' => $products,
            'brands' => $brands,
            'brandName' => $brandName,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
        $stockLevel = getStockLevel($product->quantity);

        return view('product')->with([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
}
