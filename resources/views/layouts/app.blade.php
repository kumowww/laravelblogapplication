<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravelblogapplication</title>
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --card-border: #1a1a1a;
            --btn-bg: #808080;
            --btn-text: #ffffff;
            --input-bg: #ffffff;
        }
        [data-theme="dark"] {
            --bg-color: #555555;
            --text-color: #ffffff;
            --card-border: #ffffff;
            --btn-bg: #808080;
            --btn-text: #ffffff;
            --input-bg: #555555;
        }
        body { 
            background-color: var(--bg-color); 
            color: var(--text-color); 
            font-family: sans-serif; 
            margin: 0; 
            padding: 20px; 
            transition: background 0.3s;
        }
        .container { max-width: 1000px; margin: 0 auto; position: relative; }
        .grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; }
        .card { border: 1px solid var(--card-border); padding: 15px; border-radius: 5px; }
        
        nav { margin-bottom: 20px; display: flex; gap: 10px; align-items: center; }
        
        .nav-link {
            background: var(--btn-bg);
            color: var(--btn-text);
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .lang-link {
            color: var(--text-color);
            text-decoration: none;
            margin-left: 10px;
            font-size: 0.9em;
            border: 1px solid var(--card-border);
            padding: 2px 5px;
        }

        .theme-toggle {
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            border: none;
            background: none;
        }

        #icon-sun, #icon-moon { width: 30px; height: 30px; }
    </style>
</head>
<body data-theme="dark">
    <div class="container">
        <button class="theme-toggle" onclick="toggleTheme()">
            <svg id="icon-sun" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" style="display: block;">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
            <svg id="icon-moon" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" style="display: none;">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
        </button>

        <nav>
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="nav-link">Home</a>
            <a href="{{ route('posts.index', ['locale' => app()->getLocale()]) }}" class="nav-link">Posts</a>
            <div style="margin-left: auto;">
                <a href="/en" class="lang-link">EN</a>
                <a href="/de" class="lang-link">DE</a>
                <a href="/ru" class="lang-link">RU</a>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <script>
        function toggleTheme() {
            const body = document.body;
            const sun = document.getElementById('icon-sun');
            const moon = document.getElementById('icon-moon');
            
            if (body.getAttribute('data-theme') === 'dark') {
                body.setAttribute('data-theme', 'light');
                sun.style.display = 'none';
                moon.style.display = 'block';
            } else {
                body.setAttribute('data-theme', 'dark');
                sun.style.display = 'block';
                moon.style.display = 'none';
            }
        }
    </script>
</body>
</html>