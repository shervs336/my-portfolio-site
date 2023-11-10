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

    <body>
    <div class="relative min-h-screen bg-slate-50 bg-center sm:flex sm:justify-center sm:items-center selection:bg-indigo-500 selection:text-white">

<div class="p-6 mx-auto w-full max-w-7xl lg:p-8">

    <nav class="" x-data="{ open: false }">
        <div class="cotainer mx-auto px-4 py-2">
            <div class="flex items-center justify-between">
            <a href="#" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

            <div class="hidden md:flex md:items-center space-x-4">
                <a href="{{ route('admin.index', ['test' => 'test']) }}" class=" hover:text-blue-500">Home</a>
                <a href="#about" class=" hover:text-blue-500">About</a>
                <a href="#contact" class="hover:text-blue-500">Contact</a>
                <a href="#latest-blog" class="hover:text-blue-500">Blog</a>
                <a href="#labs"  class="hover:text-blue-600 py-2">Labs</a>
                @if (Route::has('login'))
                    
                    @auth
                        <a href="{{ route('admin.index') }}" class="hover:text-gray-100 hover:bg-blue-900 bg-blue-700 text-white py-2 px-4 rounded-full">Dashboard</a>
                    @endauth
                    
                @endif
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden text-blue-700 focus:outline-none" @click="open = true"> 
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

        <div x-show="open" class="md:hidden">
            <div class="px-2 pt-2 pb-4">
                <a href="#home" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Home</a>
                <a href="#about" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">About</a>
                <a href="#contact" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Contact</a>
                <a href="#latest-blog" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Blog</a>
                <a href="#labs" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Labs</a>
                
            </div>
        </div>
    </nav>

        @yield('body')

        <br><br>

       <!--Register Form section-->
       <div class="flex justify-center" id="about" >
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                        <div class="w-full flex flex-col px-4">
                            <div class="flex-1">
                                <h1 class="text-2xl font-bold text-blue-500">Hi :)</h1>
                                <p class="mt-4 text-sm text-gray-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-col items-start ">
                            <form>
                            <div class="mb-6">
                                <label for="email" class="block ms-20 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" class="ms-20 peer block min-h-[auto] w-5/6 rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block ms-20 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                                <input type="password" id="password" class="ms-20 peer block min-h-[auto] w-5/6 rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" required>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block ms-20 text-sm font-medium text-gray-900 dark:text-gray-900">Your message</label>
                                <textarea id="message" rows="6" class="ms-20 peer block min-h-[auto] w-5/6 rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Type your message here..."></textarea>
                            </div>
                           
                            <button type="submit" class="ms-20 -block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="dark">Send</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <br><br>

            <!--Footer--> 
            <footer class="container margin:auto flex flex-col space-y-4 space-x-2 md:space-y-0 md:space-x-4  md:flex-row justify-between">
                <div class="md:w-1/4 md:py-16 px-2 py-0">
                    <a href="#home" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

                    <div class="mt-3 flex space-x-2">
                        <a href="https://www.facebook.com/sherwinrheycondez" class="w-10 h-10 border hover:bg-blue-600  text-gray-300 hover:text-white rounded-full flex items-center justify-center">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/SherwinRhey" class="w-10 h-10 border hover:bg-black  text-gray-300 hover:text-white rounded-full flex items-center justify-center">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/sherwinrheycondez/" class="w-10 h-10 border hover:bg-sky-600  text-gray-300 hover:text-white rounded-full flex items-center justify-center">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 border hover:bg-red-500  text-gray-300 hover:text-white rounded-full flex items-center justify-center">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div> 
                </div>
                    
                    
                <div class="ml-0 md:w-1/4 py-0 space-y-4 md:py-16 px-2">
                    <h6 class="mb-2.5 font-bold uppercase">Links</h6>

                    <ul class="mb-0 list-none space-y-2">
                        <li>
                            <a href="#home" class="text-slate-400 hover:text-blue-700">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="text-slate-400 hover:text-blue-700">About</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-slate-400 hover:text-blue-700">Contact</a>
                        </li>
                        <li>
                            <a href="#latest-blog" class="text-slate-400 hover:text-blue-700">Blog</a>
                        </li>
                        <li>
                            <a href="#labs" class="text-slate-400 hover:text-blue-700">Labs</a>
                        </li>
                    </ul>
                </div>

                <!--Sign-up form-->
                <div class="ml-0 md:w-1/2 py-0 md:py-16 px-2">
                    <form action="">
                        <div class=" justify-right gap-4 space-y-4 md:gap-2">
                            <div class="w-full md:ml-auto">
                            <p class="text-secondary-800 dark:text-secondary-200 ms-20"><strong>Join my newsletter</strong></p>
                        </div>

                        <div class="relative" data-te-input-wrapper-init>
                            <input type="text" class="ms-20 peer block min-h-[auto] w-5/6 rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email address"/>
                            <label for="exampleFormControlInput1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-slate-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-secondary-200 dark:peer-focus:text-secondary-200 ms-20">Email address</label>
                        </div>
                                
                        <div class="w-1/3 md:mr-auto space-y-4">
                            <button type="button" class="ms-20 inline-block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="dark">Join</button>
                        </div>
                    </form>
                </div>
            </footer>

            <!--Copyright Section--->
            <div class="flex flex-col md:flex-row justify-center px-4 mt-4 md:mt-16 sm:items-center sm:justify-between">
                <div class="text-sm md:text-center text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell" class="inline-flex items-center group hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">  
                            Copyright &copy; 2023
                        </a>
                    </div>
                </div>
                <div class="md:ml-4 text-sm md:text-center text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>

            </div>
        </div>

    </body>
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="sherwinrheycondez" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting. You can also help me by buying me a coffee." data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-KFE24VTTHK"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-KFE24VTTHK'); </script>
</html>
