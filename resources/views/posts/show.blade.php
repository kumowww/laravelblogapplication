@extends('layouts.app')

@section('content')
    <div class="post-card">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        
        <div class="actions">
            <a href="{{ route('posts.index') }}">Back to List</a>
            
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
