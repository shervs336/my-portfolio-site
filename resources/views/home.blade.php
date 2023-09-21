@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen bg-slate-50 bg-center sm:flex sm:justify-center sm:items-center selection:bg-indigo-500 selection:text-white">

        <div class="p-6 mx-auto max-w-7xl lg:p-8">

            <nav class="" x-data="{ open: false }">
                <div class="cotainer mx-auto px-4 py-2">
                    <div class="flex items-center justify-between">
                    <a href="#" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

                    <div class="hidden md:flex md:items-center space-x-4">
                        <a href="{{ route('admin.index', ['test' => 'test']) }}" class=" hover:text-blue-500">Home</a>
                        <a href="#about" class=" hover:text-blue-500">About</a>
                        <a href="#contact" class="hover:text-blue-500">Contact</a>
                        <a href="#latest-blog" class="hover:text-blue-500">Blog</a>
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
                    </div>
                </div>
            </nav>

            <div class="flex justify-center" id="home">
                <div class="w-full py-12">
                    <div class="container mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row items-center justify-between px-4">
                        <div class="w-full md:w-1/2">
                        <h1 class="text-1xl font-bold text-blue-500">Hi there <span class="wave">👋</span> I am</h1>
                        <h2 class="text-3xl font-bold mt-2">Sherwin Rhey Condez</h2>
                        <p class="mt-4"><span class="text-gray-400">Professional</span> Full-Stack Developer</p>
                        <p class="mt-4 text-gray-400">I am passionate about crafting high-quality web applications and bringing ideas to life through code. With a strong background in full-stack development, I love tackling complex challenges and building elegant solutions. Let's work together to create something amazing!</p>
                        <div class="mt-6">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4 transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-ripple-init data-te-ripple-color="dark">Contact</a>
                            <a href="#" class="text-blue-700 font-semibold py-2 px-4 border border-blue-500 rounded transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-ripple-init data-te-ripple-color="dark"">Learn More</a>
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
                                <p class="mt-4 text-gray-400">Passionate and Dedicated Full Stack Developer with a Strong Drive for Excellence, Leveraging Cutting-edge Technologies to Craft Innovative, Seamless, and Scalable Solutions that Empower Businesses, Delight Users, and Drive Digital Transformation in a Connected World.</p>
                            </div>
                        </div>
                        <div class="w-full flex flex-col items-start px-4">
                            <div class="flex-1">
                                <h1 class="text-3xl font-medium">Connect with me</h1>
                                <p class="mt-4 text-gray-400 text-justify">Feel free to connect with me to discuss exciting opportunities, collaborate on projects, or simply have a chat about the ever-evolving world of technology. I'm always open to new connections and eager to engage with fellow enthusiasts. Let's connect and explore the endless possibilities together!</p>
                                <div class="mt-5 flex space-x-4">
                                    <a href="https://www.facebook.com/sherwinrheycondez" class="w-12 h-12 border text-gray-300 hover:bg-blue-600 hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="https://twitter.com/SherwinRhey" class="w-12 h-12 border text-gray-300 hover:bg-black hover:text-white rounded-full flex items-center justify-center">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/sherwinrheycondez/" class="w-12 h-12 border text-gray-300 hover:bg-sky-600 hover:text-white rounded-full flex items-center justify-center">
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

            <div class="flex justify-center" id="services">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between">
                        <div class="w-full flex flex-col px-4">
                            <div class="flex-1"> 
                                <h1 class="text-2xl font-bold text-blue-500 text-center">What I Offer?</h1>
                                <h2 class="text-5xl font-bold mt-2 text-center">My Services</h2>
                                <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2">Unlocking Your Full Potential: My Comprehensive Range of Services</p>
                 
                                <!--Services-->           
                                <div class="container mx-auto flex flex-col space-y-6 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                                    <div class="md:w-1/3 rounded-xl shadow-md py-16">
                                        <div class="">
                                            <div class="rounded-full bg-gradient-to-r from-cyan-500 to-blue-700 services-icon text-4xl text-white mx-auto">
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
                                            <div class="rounded-full bg-gradient-to-r from-cyan-500 to-blue-700 services-icon text-4xl text-white mx-auto">
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
                                            <div class="rounded-full bg-gradient-to-r from-cyan-500 to-blue-700 services-icon text-4xl text-white mx-auto">
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

            <!--Showroom--> 

            <div class="flex justify-center" id="showroom">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between">
                        <div class="w-full flex flex-col">
                            <div class="flex-1"> 
                                <h1 class="text-2xl font-bold text-blue-500 text-center">Visit my</h1>
                                <h2 class="text-5xl font-bold mt-2 text-center">Showroom</h2>

                                <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize">Witness the seamless integration of technology and creativity in my showroom</p>

                                <div id="ShowroomContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-2 lg:gap-x-6">
 
                                    @foreach($works as $work)
                                        @include('components.showroom-content', ['work' => $work])
                                    @endforeach

                                </div><!-- Showroom Contents-->

                            </div><!-- Flex 1 -->
                        </div>
                    </div> <!-- Container Block -->
                </div>
            </div>

            <!--Blogs--> 

            <div class="flex justify-center" id="latest-blog">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between">
                        <div class="w-full flex flex-col">
                            <div class="flex-1"> 
                                <h1 class="text-2xl font-bold text-blue-500 text-center">Recent Posts</h1>
                                <h2 class="text-5xl font-bold mt-2 text-center">My Dev Adventures</h2>

                                <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize">Learn about my day-to-day adventures as I tackle new problems and solutions along the way.</p>

                                <div id="BlogContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-3 lg:gap-x-6">
 
                                    @foreach($blogs as $blog)
                                        @include('components.blogs-content', ['blog' => $blog])
                                    @endforeach

                                </div><!-- blog Contents-->

                            </div><!-- Flex 1 -->
                        </div>
                    </div> <!-- Container Block -->
                </div>
            </div>


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
                            <a href="#blog" class="text-slate-400 hover:text-blue-700">Blog</a>
                        </li>
                    </ul>
                </div>


                <!--Sign-up form-->
                <div class="ml-0 md:w-1/2 py-0 md:py-16 px-2">
                    <form action="">
                        <div class=" justify-right gap-4 space-y-4 md:gap-2">
                            <div class="w-full md:ml-auto">
                            <p class="text-secondary-800 dark:text-secondary-200"><strong>Join my newsletter</strong></p>
                        </div>

                        <div class="relative" data-te-input-wrapper-init>
                            <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-slate-100 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email address"/>
                            <label for="exampleFormControlInput1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-slate-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-secondary-200 dark:peer-focus:text-secondary-200">Email address</label>
                        </div>
                                
                        <div class="w-1/3 md:mr-auto space-y-4">
                            <button type="button" class="inline-block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
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
@endsection
