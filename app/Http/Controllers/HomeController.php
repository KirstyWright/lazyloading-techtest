<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category');

        if ($request->search) {
            $products = $products->where('name','like',"%{$request->search}%");
        }

        $products = $products->paginate(10);
        return view('welcome',['products'=>$products]);
    }

    public function getJsonProducts(Request $request)
    {
        $products = Product::with('category');

        if ($request->search) {
            $products = $products->where('name','like',"%{$request->search}%");
        }

        $products = $products->paginate(10);
        return response()->json($products);
    }
}
