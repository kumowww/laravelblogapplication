<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $locale = $request->route('locale') ?? 'en';
        app()->setLocale($locale);
        return view('auth.register', ['locale' => $locale]);
    }

    public function store(Request $request)
    {
        $locale = $request->route('locale') ?? 'en';
        app()->setLocale($locale);
        return redirect()->route('register', ['locale' => $locale])->with('success', __('messages.register_coming_soon_description'));
    }
}