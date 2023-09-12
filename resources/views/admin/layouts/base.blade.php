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
            <div class=" w-1/5 flex flex-col bg-blue-900 items-start h-screen fixed p-4">
            
                <h2 class="text-sm font-medium my-4 pb-6 text-blue-500 border-b-2 w-full">Sherwin Rhey Condez</h2>
                <!-- Add your sidebar links here -->
                <a href="{{ route('admin.index') }}" class="text-sm font-medium text-blue-950 hover:text-blue-500 py-2"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a>
                <a href="{{ route('admin.works') }}" class="text-sm font-medium text-blue-950 hover:text-blue-500 py-2"><i class="fa-solid fa-briefcase mr-2"></i> Works</a>
                <a href="{{ route('admin.blogs') }}" class="text-sm font-medium text-blue-950 hover:text-blue-500 py-2"><i class="fa-solid fa-newspaper mr-2"></i> Blogs</a>
                <!-- You can add more links as needed -->

                <div class="w-full h-2 border-b-2 mb-3"></div>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-blue-950 hover:text-red-800 py-2"><i class="fa-solid fa-right-from-bracket mr-2"></i> Logout</button>
                </form>
                

            </div>

            <!-- Main Content -->
            <div class="w-4/5 bg-white flex-1 ml-1/5 dashboard-content">
                @yield('body')
            </div>
        </div>
        
    </body>
</html>