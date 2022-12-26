<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @yield('head')
    </head>
    <body class="bg-slate-100">
        <nav class="p-4 bg-white flex justify-between mb-3">
            <ul class="flex items-center justify-between">
                <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
                    <li><a href="{{ route('posts') }}" class="p-3">Posts</a></li>
                @endauth
            </ul>

            <ul class="flex items-center justify-between">
                @auth
                    <li><a href="#" class="p-3">{{ ucfirst(Auth::user()->name) }}</a></li>
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="p-2">Log out</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
                    <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
                @endguest
            </ul>
        </nav>
        <div class="container mx-auto">
            @yield('content')
        </div>
    </body>
</html>