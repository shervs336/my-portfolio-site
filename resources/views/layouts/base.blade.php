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
		<link rel="shortcut icon" href="{{ asset('/images/src_logo.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles

        @yield('custom_styles')

        @yield('meta_data')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
    
        <div class="md:container md:mx-auto px-8 lg:px-0">

            @includeWhen(!request()->routeIs('login'), 'layouts.header')

            @yield('body')

            @includeWhen(!request()->routeIs('login'), 'layouts.footer')

        </div>

    </body>

    @if (!request()->routeIs('login'))               
        <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="sherwinrheycondez" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can also help me by buying me a coffee." data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
    @endif

    @livewireScripts
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-KFE24VTTHK"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-KFE24VTTHK'); </script>
</html>
