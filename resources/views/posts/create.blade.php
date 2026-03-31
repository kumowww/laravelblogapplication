@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Create Post</h1>

    <form method="POST" action="/posts" class="bg-gray-900 border border-gray-800 p-6 rounded-lg">
        @csrf

        <div class="mb-4">
            <label class="block font-bold mb-2">Title</label>
            <input type="text" name="title" required class="w-full bg-gray-800 border border-gray-700 rounded px-4 py-2 text-white @error('title') border-red-500 @enderror" value="{{ old('title') }}">
            @error('title') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2">Content</label>
            <textarea name="content" required rows="10" class="w-full bg-gray-800 border border-gray-700 rounded px-4 py-2 text-white @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
            @error('content') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-gray-800 px-6 py-2 rounded hover:bg-gray-700">Publish</button>
    </form>
</div>
@endsection