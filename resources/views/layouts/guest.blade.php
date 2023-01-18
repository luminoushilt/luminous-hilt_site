<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased flex flex-col">
<header class="bg-gray-700 text-white sticky top-0 z-10">
    <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">

        <a href="/" class="text-3xl font-medium flex items-center">
            <img src="{{ asset('build/assets/img/luminous-hilt-logo.png') }}" alt="Luminous Hilt Logo" width="40">
            <span class="ml-2">Luminous Hilt</span>
        </a>
        <nav class="hidden md:flex md:justify-evenly md:mb-0 md:space-x-8 md:text-xl" aria-label="main">
            <a href="/" class="hover:opacity-90 hover:text-orange-400">Home</a>
            <a href="/about" class="hover:opacity-90 hover:text-orange-400">About</a>
        </nav>
        @if (Route::has('login'))
            <div class="hidden px-6 py-4 sm:max-w-2xl sm:flex sm:ml-0">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>

                    @if (Route::has('register'))
                    <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a> -->
                        <a href="#" class="ml-4 text-sm text-white underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </section>
</header>
<main class="relative flex items-top justify-center min-h-screen bg-gray-100 scroll-mt-40 sm:items-center py-4 sm:pt-0">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</main>
<x-footer />
</body>
</html>
