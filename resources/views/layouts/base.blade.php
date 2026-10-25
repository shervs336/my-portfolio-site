
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php
            $pageTitle = trim($__env->yieldContent('title'));
            $fullTitle = $pageTitle
                ? $pageTitle . ' - ' . config('app.name')
                : config('app.name');

            $metaDescription = trim($__env->yieldContent('meta_description'))
                ?: 'Sherwin Rhey Condez is a full-stack web developer specializing in Laravel, PHP, API integrations, and scalable web applications.';

            // url()->current() excludes query parameters.
            $canonicalUrl = trim($__env->yieldContent('canonical_url'))
                ?: url()->current();

            $ogTitle = trim($__env->yieldContent('og_title'))
                ?: $fullTitle;

            $ogDescription = trim($__env->yieldContent('og_description'))
                ?: $metaDescription;

            $ogImage = trim($__env->yieldContent('og_image'))
                ?: asset('images/og-image.jpg');

            $ogType = trim($__env->yieldContent('og_type'))
                ?: 'website';
        @endphp

        <!-- SEO Meta Tags -->
        <title>{{ $fullTitle }}</title>

        <meta name="description" content="{{ $metaDescription }}">
        <meta name="robots" content="index,follow">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ $canonicalUrl }}">

        <!-- Open Graph Meta Tags -->
        <meta property="og:type" content="{{ $ogType }}">
        <meta property="og:title" content="{{ $ogTitle }}">
        <meta property="og:description" content="{{ $ogDescription }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:image" content="{{ $ogImage }}">
        <meta property="og:image:alt" content="{{ $ogTitle }}">

        <!-- Twitter / X Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $ogTitle }}">
        <meta name="twitter:description" content="{{ $ogDescription }}">
        <meta name="twitter:image" content="{{ $ogImage }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('/images/src_logo.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,700;1,400&display=swap"
            rel="stylesheet"
        >
        <link
            rel="stylesheet"
            href="https://unpkg.com/tippy.js@6/dist/tippy.css"
        >

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @livewireStyles(['nonce' => csp_nonce()])

        @yield('custom_styles')
        @yield('meta_data')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-slate-50">
        @includeWhen(!request()->routeIs('login'), 'layouts.header')

        <div class="xl:container xl:mx-auto px-8 xl:px-0">
            @yield('body')
        </div>

        @includeWhen(!request()->routeIs('login'), 'layouts.footer')

        @if (!request()->routeIs('login'))
            <script
                nonce="{{ csp_nonce() }}"
                data-name="BMC-Widget"
                data-cfasync="false"
                src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js"
                data-id="sherwinrheycondez"
                data-description="Support me on Buy me a coffee!"
                data-message="Thank you for visiting. You can also help me by buying me a coffee."
                data-color="#FF813F"
                data-position="Right"
                data-x_margin="18"
                data-y_margin="18"
            ></script>
        @endif

        @livewireScripts(['nonce' => csp_nonce()])

        <!-- Google Tag Manager / Google Analytics configuration -->
        <script nonce="{{ csp_nonce() }}">
            window.dataLayer = window.dataLayer || [];

            window.dataLayer.push({
                'gtm.nonce': '{{ csp_nonce() }}'
            });

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-KFE24VTTHK');
        </script>

        <script
            async
            src="https://googletagmanager.com"
            nonce="{{ csp_nonce() }}"
        ></script>
    </body>
</html>
