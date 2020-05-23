<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('product.index', compact('products'));
    }

    public function show(Products $product)
    {
        return view('product.show', compact('product'));
    }
}
