<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Seo Meta Tags-->
        <meta name="robots" content="index,follow"/>

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

    <body>
        <div class="relative min-h-screen bg-slate-50 bg-center sm:flex sm:justify-center sm:items-center selection:bg-indigo-500 selection:text-white">

            <div class="p-6 mx-auto w-full max-w-7xl lg:p-8">

                @includeWhen(!request()->routeIs('login'), 'layouts.header')

                @yield('body')

                @includeWhen(!request()->routeIs('login'), 'layouts.footer')

            </div>
        </div>

    </body>

    @if (Route::has('login'))
                    
    @auth
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="sherwinrheycondez" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can also help me by buying me a coffee." data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
    @endauth
 
    @endif


    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-KFE24VTTHK"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-KFE24VTTHK'); </script>
</html>
