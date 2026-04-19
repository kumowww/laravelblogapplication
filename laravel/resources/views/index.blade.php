@extends('layouts.app')

@section('content')
    <h1>LARAVEL NOTHERS CORE</h1>
    
    <div class="grid">
        <div class="card">
            <h3>Index System</h3>
            <p>Status: Active</p>
            <form action="{{ route('index.execute') }}" method="POST">
                @csrf
                <button class="btn">RUN ALL FILES</button>
            </form>
        </div>

        <div class="card">
            <h3>Product Management</h3>
            <p>Models & Migrations</p>
            <a href="{{ route('products.index') }}" class="btn">OPEN PRODUCT LIST</a>
        </div>

        <div class="card">
            <h3>System Actions</h3>
            <p>Database & Cache</p>
            <form action="{{ route('system.clear') }}" method="POST">
                @csrf
                <button class="btn">CLEAR SYSTEM</button>
            </form>
        </div>
    </div>

    <div style="margin-top: 30px;">
        <h2>Active Processes</h2>
        <div class="card">
            <pre style="color: #00ff00;">> System linked to App\Http\Controllers...</pre>
            <pre style="color: #00ff00;">> UI Mode: High-Contrast Black/White</pre>
        </div>
    </div>
@endsection