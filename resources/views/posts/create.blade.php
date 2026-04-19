@extends('layouts.app')

@section('content')
    <h2>Create New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" required>
        </div>
        
        <div>
            <label for="content">Content</label><br>
            <textarea name="content" id="content" rows="5" required></textarea>
        </div>
        
        <button type="submit">Submit Post</button>
    </form>
@endsection
