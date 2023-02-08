<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#F3F4F6" />
    <meta name="Description" content="A new age consulting genre illuminating the path to all your virtual needs!" />
    <link rel="canonical" href="https://luminoushilt.dev" />
{{--    <link rel="shortcut icon" media="all" href="{{ asset('build/assets/img/luminous-hilt-logo.png') }}" type="image/x-icon" />--}}

    <title>{{ config('app.name', 'Luminous Hilt') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('build/assets/img/favicon.ico') }}" type="image/x-icon"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap"
        rel="stylesheet"
    />
    <script async src="https://kit.fontawesome.com/f774bb926b.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased flex flex-col">
<header class="bg-gray-700 mb-0 text-white sticky top-0 z-10">
    <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">

        <a href="/" class="text-3xl font-medium flex items-center">
            <img src="{{ asset('build/assets/img/luminous-hilt-logo.png') }}" alt="Luminous Hilt Logo" width="40">
            <span class="ml-2">Luminous Hilt</span>
        </a>
        <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer relative w-8 h-8">
            <!-- &#9776; -->
            <div class="bg-white w-8 h-1 rounded absolute top-4 -mt-0.5 transition-all duration-500
                        before:content-[''] before:bg-white before:w-8 before:h-1 before:rounded before:absolute before:-translate-x-4 before:-translate-y-3 before:transition-all before:duration-500
                        afert:content-[''] after:bg-white after:w-8 after:h-1 after:rounded after:absolute after:-translate-x-4 after:translate-y-3 after:transition-all after:duration-500"></div>
        </button>
        <nav class="hidden md:flex md:justify-evenly md:ml-auto md:mb-0 md:space-x-8 md:text-xl" aria-label="main">
            <a href="{{ url('/') }}" class="hover:opacity-90 hover:text-orange-400">Home</a>
            <a href="{{ url('About') }}" class="hover:opacity-90 hover:text-orange-400">About</a>
            <a href="{{ url('Portfolio') }}" class="hover:opacity-90 hover:text-orange-400">Portfolio</a>
            <a href="{{ url('Contact') }}" class="hover:opacity-90 hover:text-orange-400">Contact</a>
        </nav>
        @if (Route::has('login'))
            <div class="hidden px-6 py-4 sm:max-w-2xl sm:flex sm:ml-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-white underline hover:decoration-0">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </section>

    <section id="mobile-menu" class="absolute top-68 bg-black w-full text-5xl flex-col justify-content-center origin-top animate-open-menu hidden">
        <!-- <button id="close" class="text-8xl self-end px-6">
            &times;
        </button> -->
        <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
            <a href="{{ url('/') }}" class="w-full text-center py-6 hover:opacity-90">Home</a>
            <a href="{{ url('About') }}" class="w-full text-center py-6 hover:opacity-90">About</a>
            <a href="{{ url('Portfolio') }}" class="w-full text-center py-6 hover:opacity-90">Portfolio</a>
            <a href="{{ url('Contact') }}" class="w-full text-center py-6 hover:opacity-90">Contact Us</a>
        </nav>
    </section>
</header>
<main class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</main>
<x-footer />
</body>
</html>
