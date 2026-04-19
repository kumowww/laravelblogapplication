<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $locale = $request->route('locale', 'en');
        return view('posts.index', ['locale' => $locale]);
    }

    public function create(Request $request)
    {
        $locale = $request->route('locale', 'en');
        return view('posts.create', ['locale' => $locale]);
    }
}