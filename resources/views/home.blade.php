@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen bg-slate-50 bg-center sm:flex sm:justify-center sm:items-center selection:bg-indigo-500 selection:text-white">

        <div class="p-6 mx-auto max-w-7xl lg:p-8">

            <nav class="">
                <div class="container mx-auto px-4 py-2">
                    <div class="flex items-center justify-between">
                    <a href="#" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

                    <div class="hidden md:flex md:items-center">
                        <a href="{{ route('home') }}" class=" hover:text-gray-300 mr-4">Home</a>
                        <a href="#" class=" hover:text-gray-300 mr-4">Blog</a>
                        <a href="#" class=" hover:text-gray-300 mr-4">About</a>
                        <a href="#" class=" hover:text-gray-300">Contact</a>
                    </div>

                    <!-- Mobile menu button -->
                    <button class="md:hidden text-white focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M4 6h16M4 12h16M4 18h16"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        </svg>
                    </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="hidden md:hidden">
                    <div class="px-2 pt-2 pb-4">
                    <a href="{{ route('home') }}" class="block text-white font-semibold hover:text-gray-300 py-2">Home</a>
                    <a href="#" class="block text-white font-semibold hover:text-gray-300 py-2">Blog</a>
                    <a href="#" class="block text-white font-semibold hover:text-gray-300 py-2">About</a>
                    <a href="#" class="block text-white font-semibold hover:text-gray-300 py-2">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="flex justify-center">
                <div class="w-full py-12">
                    <div class="container mx-auto flex items-center justify-between px-4">
                        <div class="w-1/2">
                        <h1 class="text-1xl font-bold text-blue-500">Hi there <span class="wave">👋</span> I am</h1>
                        <h2 class="text-3xl font-bold mt-2">Sherwin Rhey Condez</h2>
                        <p class="mt-4"><span class="text-gray-400">Professional</span> Full-Stack Developer</p>
                        <p class="mt-4 text-gray-400">I am passionate about crafting high-quality web applications and bringing ideas to life through code. With a strong background in full-stack development, I love tackling complex challenges and building elegant solutions. Let's work together to create something amazing!</p>
                        <div class="mt-6">
                            <a href="#" class="bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4">Contact</a>
                            <a href="#" class="text-blue-700 font-semibold py-2 px-4 border border-blue-500 rounded">Learn More</a>
                        </div>
                        </div>
                        <div class="w-1/2">
                        <!---<img src="smiling-guy.jpg" alt="Image Here" class="w-full h-auto">--->
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
                <div class="text-sm text-center text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell" class="inline-flex items-center group hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">
                            
                            Copyright &copy; 2023
                        </a>
                    </div>
                </div>
                <div class="ml-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
@endsection
