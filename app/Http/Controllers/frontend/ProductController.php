<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::all();
        $menus = Menu::where('position', 'mainmenu')->get();
        return view('frontend.product', compact('products', 'brands', 'categories', 'menus'));
    }
    public function product_detail($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        $products = Product::all();
        $brand = Brand::findOrFail($product->brand_id);
        $category = Category::findOrFail($product->category_id);
        $menus = Menu::where('position', 'mainmenu')->get();
        return view('frontend.product_detail', compact('product','products', 'brand', 'category','categories', 'menus'));
    }
}
