<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondre Network | Home</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success')) 
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif  

 
    <header>
        <nav>
            <h1>
             <a href="{{ route('dashboard.index') }}">7 sense</a>
            </h1>
            
            @guest
                <a href="{{ route('show.login') }}" class="btn">Login</a>
                <a href="{{ route('show.register') }}" class="btn">Register</a>
            @endguest

            @auth
                <span class="border-r-2 pr-2">
                    Hi there, {{ Auth::user()->name }}
                </span>
                <a href="{{ route('dashboard.index') }}" class="btn">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn">Logout</button>
                </form> 
            @endauth 
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>
