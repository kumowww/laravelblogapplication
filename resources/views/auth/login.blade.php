@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-3xl font-bold mb-8">Login</h1>

    <form method="POST" action="/login" class="bg-gray-900 border border-gray-800 p-6 rounded-lg">
        @csrf

        <div class="mb-4">
            <label class="block font-bold mb-2">Email</label>
            <input type="email" name="email" required class="w-full bg-gray-800 border border-gray-700 rounded px-4 py-2 text-white" value="{{ old('email') }}">
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2">Password</label>
            <input type="password" name="password" required class="w-full bg-gray-800 border border-gray-700 rounded px-4 py-2 text-white">
        </div>

        <button type="submit" class="w-full bg-gray-800 py-2 rounded hover:bg-gray-700">Sign In</button>
    </form>
</div>
@endsection