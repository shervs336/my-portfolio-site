@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen bg-slate-50 bg-center sm:flex sm:justify-center sm:items-center selection:bg-indigo-500 selection:text-white">

        <div class="p-6 mx-auto max-w-7xl lg:p-8">

            <nav class="">
                <div class="container mx-auto px-4 py-2">
                    <div class="flex items-center justify-between">
                    <a href="#" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

                    <div class="hidden md:flex md:items-center space-x-4">
                        <a href="#home" class=" hover:text-blue-500">Home</a>
                        <a href="#about" class=" hover:text-blue-500">About</a>
                        <a href="#contact" class="hover:text-blue-500">Contact</a>
                        @if (Route::has('login'))
                            
                            @auth
                                <a href="{{ route('admin.index') }}" class="hover:text-gray-100 hover:bg-blue-900 bg-blue-700 text-white py-2 px-4 rounded-full">Dashboard</a>
                            @endauth
                            
                        @endif
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
                        <a href="#home" class="block text-white font-semibold hover:text-gray-300 py-2">Home</a>
                        <a href="#about" class="block text-white font-semibold hover:text-gray-300 py-2">About</a>
                        <a href="#contact" class="block text-white font-semibold hover:text-gray-300 py-2">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="flex justify-center" id="home">
                <div class="w-full py-12">
                    <div class="container mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row items-center justify-between px-4 text-justify">
                        <div class="w-full md:w-1/2">
                        <h1 class="text-1xl font-bold text-blue-500">Hi there <span class="wave">👋</span> I am</h1>
                        <h2 class="text-3xl font-bold mt-2">Sherwin Rhey Condez</h2>
                        <p class="mt-4"><span class="text-gray-400">Professional</span> Full-Stack Developer</p>
                        <p class="mt-4 text-gray-400">I am passionate about crafting high-quality web applications and bringing ideas to life through code. With a strong background in full-stack development, I love tackling complex challenges and building elegant solutions. Let's work together to create something amazing!</p>
                        <div class="mt-6">
                            <a href="#" class="bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4">Contact</a>
                            <a href="#" class="text-blue-700 font-semibold py-2 px-4 border border-blue-500 rounded">Learn More</a>
                        </div>
                        </div>
                        <div class="w-full md:w-1/2 ">
                        <img src="{{asset('images/icon.jpg')}}" alt="Image Here" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center" id="about" >
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                        <div class="w-full flex flex-col px-4">
                            <div class="flex-1">
                                <h1 class="text-2xl font-bold text-blue-500 uppercase">About Me</h1>
                                <h2 class="text-5xl font-bold mt-2">Crafting code, connecting worlds.</h2>
                                <p class="mt-4 text-slate-500 text-justify">Passionate and Dedicated Full Stack Developer with a Strong Drive for Excellence, Leveraging Cutting-edge Technologies to Craft Innovative, Seamless, and Scalable Solutions that Empower Businesses, Delight Users, and Drive Digital Transformation in a Connected World.</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-col items-start px-4">
                            <div class="flex-1">
                                <h1 class="text-3xl font-medium">Connect with me</h1>
                                <p class="mt-4 text-slate-500 text-justify">Feel free to connect with me to discuss exciting opportunities, collaborate on projects, or simply have a chat about the ever-evolving world of technology. I'm always open to new connections and eager to engage with fellow enthusiasts. Let's connect and explore the endless possibilities together!</p>
                                <div class="mt-5 flex space-x-4">
                                    <a href="#" class="w-12 h-12 border text-gray-300 hover:bg-blue-600 hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 border text-gray-300 hover:bg-sky-400 hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 border text-gray-300 hover:bg-sky-600 hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 border text-gray-300 hover:bg-red-500 hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center" id="about">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between text-justify">
                        <div class="w-full flex flex-col px-4">
                            <div class="flex-1"> 
                                <h1 class="text-2xl font-bold text-blue-500 text-center">What I Offer?</h1>
                                <h2 class="text-5xl font-bold mt-2 text-center">My Services</h2>
                                <p class="mt-4 text-gray-400 text-center max-w-1/2">Unlocking Your Full Potential: My Comprehensive Range of Services</p>
                   <!--Services-->           
                                <div class="container mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                                    <div class="md:w-1/3 rounded-xl shadow-md py-16">
                                        <div class="">
                                            <div class="rounded-full bg-blue-600 services-icon text-4xl text-white mx-auto">
                                                <i class="fa-solid fa-gears"></i>
                                            </div>
                                        </div>
                                        <h2 class="text-3xl font-bold mt-12 text-center">Design</h2>
                                        <div class="text-center mt-8 text-gray-400 px-8">
                                            Your Vision, Our Code: Crafting Custom Solutions for Your Programming Needs
                                        </div>
                                    </div>

                                    <div class="md:w-1/3 rounded-xl shadow-md py-16">
                                        <div class="">
                                            <div class="rounded-full bg-blue-600 services-icon text-4xl text-white mx-auto">
                                                <i class="fa-solid fa-hammer"></i>
                                        </div>
                                        </div>
                                        <h2 class="text-3xl font-bold mt-12 text-center">Develop</h2>
                                        <div class="text-center mt-8 text-gray-400 px-8">
                                            Turning Ideas into Reality: Empowering Your Business through Customized Programming Solutions
                                        </div>
                                    </div>

                                    <div class="md:w-1/3 rounded-xl shadow-md py-16">
                                        <div class="">
                                            <div class="rounded-full bg-blue-600 services-icon text-4xl text-white mx-auto">
                                                <i class="fa-solid fa-lightbulb"></i>
                                        </div>
                                        </div>
                                        <h2 class="text-3xl font-bold mt-12 text-center">Solution</h2>
                                        <div class="text-center mt-8 text-gray-400 px-8">
                                            Elevate, Innovate, Excel: Your Path to Success with Tailored Programming Solutions
                                        </div>
                                    </div>
    
                                </div>
                            </div>
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
