<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>LaravelNothers Interface</title>
    <style>
        body { background-color: #000; color: #fff; font-family: sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 1000px; margin: 0 auto; }
        .grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; }
        .card { border: 1px solid #fff; padding: 15px; border-radius: 5px; background: #000; }
        .btn { display: inline-block; background: #fff; color: #000; padding: 8px 15px; text-decoration: none; font-weight: bold; margin-top: 10px; cursor: pointer; border: none; }
        h1 { border-bottom: 2px solid #fff; padding-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>