@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="text-4xl font-bold mb-8">Latest Posts</h1>

<div class="grid gap-6">
    @forelse ($posts as $post)
        <div class="bg-gray-900 border border-gray-800 p-6 rounded-lg hover:border-gray-700 transition">
            <h2 class="text-2xl font-bold mb-2">
                <a href="/post/{{ $post->id }}" class="hover:text-gray-400">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="text-gray-400 mb-4">{{ Str::limit($post->content, 150) }}</p>
            <p class="text-sm text-gray-500">
                {{ $post->user->name }} / {{ $post->created_at->diffForHumans() }}
            </p>
        </div>
    @empty
        <p class="text-gray-500 text-center py-12">No posts yet</p>
    @endforelse
</div>

<div class="mt-8">
    {{ $posts->links() }}
</div>
@endsection