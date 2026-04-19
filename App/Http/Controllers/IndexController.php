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

    public function execute(Request $request)
    {
        return back()->with('status', 'Command executed');
    }

    public function clear()
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        return back()->with('status', 'System cleared');
    }
}