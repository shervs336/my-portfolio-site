<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
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
       
        <script src="https://cdn.tiny.cloud/1/yac5bqkf41lhr0ypm5i13iwf9ng228nt0r96igdfd9wmvy9m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="bg-gray-100">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <aside class="flex-shrink-0 h-screen fixed w-64 py-4 px-2 shadow bg-white">
                <div class="flex flex-col items-start h-full flex-1">
                    <nav class="flex flex-col h-full justify-between">
                        <h2 class="text-xl font-bold mt-4 mb-5 text-blue-500 w-full px-2">Sherwin Rhey Condez</h2>
                        <!-- Add your sidebar links here -->
                        <div class="w-full">
                            <a href="{{ route('admin.index') }}" class="block text-sm font-light text-gray-500 hover:bg-blue-100 py-2 w-full px-2 py-2 rounded"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a>
                        </div>
                        <div class="w-full">
                            <a href="{{ route('admin.works') }}" class="block text-sm font-light text-gray-500 hover:bg-blue-100 py-2 w-full px-2 py-2 rounded"><i class="fa-solid fa-briefcase mr-2"></i> Works</a>
                        </div>
                        <div class="w-full">
                            <a href="{{ route('admin.blogs') }}" class="block text-sm font-light text-gray-500 hover:bg-blue-100 py-2 w-full px-2 py-2 rounded"><i class="fa-solid fa-newspaper mr-2"></i> Blogs</a>
                        </div>
                        <div class="w-full">
                            <a href="{{ route('admin.categories') }}" class="block text-sm font-light text-gray-500 hover:bg-blue-100 py-2 w-full px-2 py-2 rounded"><i class="fa-solid fa-layer-group mr-2"></i> Categories</a>
                        </div>
                        <div class="w-full">
                            <a href="{{ route('admin.labs') }}" class="block text-sm font-light text-gray-500 hover:bg-blue-100 py-2 w-full px-2 py-2 rounded"><i class="fa-solid fa-flask mr-2"></i> Labs</a>
                        </div>
                        <!-- You can add more links as needed -->


                        <form action="{{ route('logout') }}" method="post" class="w-full mt-4 self-end justify-self-end place-self-end mt-auto">
                            <a href="{{ route('home') }}" class="w-full block text-sm text-center shadow bg-purple-500 text-white focus:bg-purple-300 hover:bg-purple-600 font-light p-2 mb-2 rounded"><i class="fa-solid fa-eye mr-2"></i> Preview Page</a>
                            @csrf
                            <button type="submit" class="w-full text-sm text-center shadow bg-blue-500 text-white focus:bg-blue-300 hover:bg-blue-600 font-light p-2 rounded"><i class="fa-solid fa-right-from-bracket mr-2"></i> Logout</button>
                        </form>
                    </nav>

                </div>
            </aside>

            <!-- Main Content -->
            <div class="w-full pl-64 bg-white flex-1">
                @yield('body')
            </div>
        </div>
        @livewireScripts
        @stack('scripts')
    </body>

</html>