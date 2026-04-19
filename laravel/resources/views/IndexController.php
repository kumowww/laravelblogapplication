<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function execute()
    {
        $products = Product::all();
        return back();
    }

    public function clear()
    {
        \Artisan::call('cache:clear');
        return back();
    }
}