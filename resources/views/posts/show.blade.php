@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
    
    <p class="text-gray-400 mb-8">
        {{ $post->user->name }} / {{ $post->created_at->format('d.m.Y') }}
    </p>

    <div class="bg-gray-900 border border-gray-800 p-6 rounded-lg mb-6">
        <p class="text-gray-300 leading-relaxed whitespace-pre-wrap">{{ $post->content }}</p>
    </div>

    @auth
        @can('update', $post)
            <div class="flex gap-3">
                <a href="/post/{{ $post->id }}/edit" class="bg-gray-800 px-4 py-2 rounded hover:bg-gray-700">Edit</a>
                <form method="POST" action="/post/{{ $post->id }}" class="inline">
                    @csrf @method('DELETE')
                    <button class="bg-red-900 px-4 py-2 rounded hover:bg-red-800" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </div>
        @endcan
    @endauth

    <a href="/" class="text-gray-400 hover:text-gray-300 mt-6 block">Back</a>
</div>
@endsection