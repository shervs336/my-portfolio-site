<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-gray-100">
        <div class="flex w-screen">
            <!-- Sidebar -->
            <div class="bg-blue-600 text-white w-1/5 h-screen fixed">
                <h2 class="text-2xl font-semibold my-4">Sidebar</h2>
                <!-- Add your sidebar content here -->
            </div>

            <!-- Main Content -->
            <div class="w-4/5 bg-white flex-1 ml-1/5 dashboard-content">
                @yield('body')
            </div>
        </div>
        
    </body>
</html>