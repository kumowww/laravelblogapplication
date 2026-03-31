<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <nav class="bg-gray-950 border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Blog</a>
            <div class="flex gap-6">
                @auth
                    <a href="/" class="hover:text-gray-400">Home</a>
                    <a href="/create" class="hover:text-gray-400">Create</a>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <button class="hover:text-gray-400">Logout</button>
                    </form>
                @else
                    <a href="/login" class="hover:text-gray-400">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-6 py-8">
        @if ($errors->any())
            <div class="bg-red-900 border border-red-700 px-4 py-3 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-900 border border-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>