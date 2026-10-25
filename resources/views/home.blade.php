@extends('layouts.app')

@section('title', 'Laravel & PHP Developer')

@section('meta_description', 'Sherwin Rhey Condez is a Laravel and PHP developer specializing in custom web applications, REST APIs, database systems, and full-stack development.')

@section('canonical_url', 'https://sherwinrheycondez.com/')

@section('og_title', 'Sherwin Rhey Condez | Laravel & PHP Developer')

@section('og_description', 'Explore my web development portfolio, Laravel projects, API integrations, and full-stack development experience.')

@section('og_image', asset('images/og-image.jpg'))

@section('og_type', 'website')

@section('content')
    <div class="flex justify-center" id="hero">
        <div class="container max-w-7xl py-12 md:py-24 border-b">
            <div class="container mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row items-center justify-between">
                <div class="w-full md:w-1/2 order-2 md:order-1 wow animate__animated animate__fadeInLeft">
                    <h1 class="text-1xl font-bold text-blue-500">Hi, I'm Sherwin Rhey Condez.</h1>
                    <h2 class="text-3xl font-bold mt-2">Senior Laravel & PHP Developer</h2>
                    <p class="mt-4">I build reliable, scalable web applications and backend systems that help businesses streamline operations and grow.</p>
                    <p class="mt-4">With 10 years of experience in web development, I specialize in Laravel, PHP, API integrations, database-driven applications, and modern web technologies.</p>
                    <div class="mt-6">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4 transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init data-te-ripple-color="dark">View My Projects</a>
                        <a href="#" class="text-blue-700 font-semibold py-2 px-4 border border-blue-500 rounded transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init data-te-ripple-color="dark"">Download Resume</a>
                    </div>
                </div>  
                <div class="w-full md:w-1/2 flex justify-center md:justify-end order-1 md:order-2 wow animate__animated animate__zoomIn">
                    <img
                        src="{{ asset('images/hero-image.png') }}"
                        alt="Sherwin Rhey Condez - Full-Stack Web Developer"
                        class="w-64 sm:w-72 md:w-75 lg:w-90 max-w-full h-auto object-contain rounded-full shadow-md mb-8 md:mb-0"
                    >
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center" id="about" >
        <div class="container max-w-7xl py-12 md:py-24 border-b">
            <div class="container margin:auto mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                <div class="w-full flex flex-col wow animate__animated animate__fadeInLeft">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-blue-500 uppercase">About Me</h1>
                        <h2 class="text-4xl xl:text-5xl font-bold mt-2">Crafting code, connecting worlds.</h2>
                        <p class="mt-4 text-gray-400">Passionate and Dedicated Full Stack Developer with a Strong Drive for Excellence, Leveraging Cutting-edge Technologies to Craft Innovative, Seamless, and Scalable Solutions that Empower Businesses, Delight Users, and Drive Digital Transformation in a Connected World.</p>
                    </div>
                </div>
                <div class="w-full flex flex-col items-start wow animate__animated animate__zoomIn">         
                    <div class="inline-grid grid-cols-5 gap-3 flex-1 lg:self-end self-center">
                        <span x-data="{ tooltip: 'HTML5' }" class="w-16 h-16 md:w-24 md:h-24 hover:bg-orange-600 text-gray-300 rounded-full hover:text-blue-100 flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-html5 text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'CSS3' }" class="w-16 h-16 md:w-24 md:h-24 hover:bg-blue-600  text-gray-300 rounded-full hover:text-blue-100 flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-css3 text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'PHP' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-indigo-400 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-php text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Laravel' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-red-500 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-laravel text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Javascript' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-yellow-400 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-js text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'VueJS' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-emerald-400 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-vuejs text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'ReactJS' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-sky-400 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-react text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'WordPress' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-sky-700 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-wordpress text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Python' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-cyan-950 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-python text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Bootstrap' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-violet-600 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-bootstrap text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'NodeJS' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-lime-500 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-node text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'SASS' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-pink-400 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-sass text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Git' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-red-500 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-git text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'GoLang' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-sky-300 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-golang text-4xl md:text-6xl"></i>
                        </span>
                        <span x-data="{ tooltip: 'Node Package Manager' }" class="w-16 h-16 md:w-24 md:h-24 text-gray-300 hover:bg-red-500 rounded-full hover:text-white flex items-center justify-center hover:animate-pulse">
                            <i x-tooltip="tooltip" class="fa-brands fa-npm text-4xl md:text-6xl"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center" id="services">
        <div class="container max-w-7xl py-12 md:py-20 border-b px-4">

            {{-- Section Heading --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <p class="text-lg font-semibold text-blue-500">
                    What I Do
                </p>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mt-2">
                    My Services
                </h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    I build, integrate, and maintain reliable web applications
                    that help businesses solve real-world problems.
                </p>
            </div>

            {{-- Service Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Laravel & PHP Development --}}
                <div class="rounded-xl border border-gray-200 dark:border-gray-700
                            bg-white dark:bg-gray-800 p-6 shadow-sm
                            hover:shadow-lg hover:-translate-y-1
                            transition duration-300
                            wow animate__animated animate__fadeInUp">

                    <div class="w-14 h-14 rounded-xl
                                bg-gradient-to-r from-cyan-500 to-blue-700
                                text-white flex items-center justify-center
                                text-2xl">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Laravel & PHP Development
                    </h3>

                    <p class="mt-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                        Custom web applications, backend systems, and scalable
                        business solutions built with Laravel and PHP.
                    </p>
                </div>

                {{-- API & System Integration --}}
                <div class="rounded-xl border border-gray-200 dark:border-gray-700
                            bg-white dark:bg-gray-800 p-6 shadow-sm
                            hover:shadow-lg hover:-translate-y-1
                            transition duration-300
                            wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.1s">

                    <div class="w-14 h-14 rounded-xl
                                bg-gradient-to-r from-cyan-500 to-blue-700
                                text-white flex items-center justify-center
                                text-2xl">
                        <i class="fa-solid fa-plug"></i>
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        API & System Integration
                    </h3>

                    <p class="mt-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                        Connect third-party services, payment gateways, and
                        external APIs to streamline business workflows.
                    </p>
                </div>

                {{-- Application Maintenance --}}
                <div class="rounded-xl border border-gray-200 dark:border-gray-700
                            bg-white dark:bg-gray-800 p-6 shadow-sm
                            hover:shadow-lg hover:-translate-y-1
                            transition duration-300
                            wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.2s">

                    <div class="w-14 h-14 rounded-xl
                                bg-gradient-to-r from-cyan-500 to-blue-700
                                text-white flex items-center justify-center
                                text-2xl">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Application Maintenance
                    </h3>

                    <p class="mt-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                        Troubleshoot bugs, improve performance, update existing
                        features, and keep applications running reliably.
                    </p>
                </div>

                {{-- Deployment & Cloud Support --}}
                <div class="rounded-xl border border-gray-200 dark:border-gray-700
                            bg-white dark:bg-gray-800 p-6 shadow-sm
                            hover:shadow-lg hover:-translate-y-1
                            transition duration-300
                            wow animate__animated animate__fadeInUp"
                    data-wow-delay="0.3s">

                    <div class="w-14 h-14 rounded-xl
                                bg-gradient-to-r from-cyan-500 to-blue-700
                                text-white flex items-center justify-center
                                text-2xl">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>

                    <h3 class="text-xl font-bold mt-5">
                        Deployment & Cloud Support
                    </h3>

                    <p class="mt-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                        Deploy and maintain web applications with server
                        configuration, database management, and cloud services.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!--Showroom--> 

    <div class="flex justify-center" id="showroom">
        <div class="container max-w-7xl py-12 md:py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">Visit my</h1>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-2 text-center">Showroom</h2>
                        <p class="mt-4 font-semibold text-gray-400 text-center max-w-1/2 capitalize mb-12">Witness the seamless integration of technology and creativity in my showroom</p>

                        <div id="ShowroomContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 lg:gap-x-6">

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

    <div class="flex justify-center" id="blog">
        <div class="container max-w-7xl py-12 md:py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">Recent Posts</h1>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-2 text-center">My Dev Adventures</h2>

                        <p class="mt-4 font-semibold text-gray-400 text-center max-w-1/2 capitalize mb-12">Learn about my day-to-day adventures as I tackle new problems and solutions along the way.</p>

                        <div id="BlogContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-6 justify-items-center">

                            @foreach($blogs as $blog)
                                @include('components.blogs-content', ['blog' => $blog])
                            @endforeach

                        </div><!-- blog Contents-->

                    </div><!-- Flex 1 -->
                </div>
            </div> <!-- Container Block -->
        </div>
    </div>

    <!--Labs-->

    <div class="@if($labs->count()) flex @else hidden @endif justify-center " id="labs">
        <div class="container max-w-7xl py-12 md:py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">My Workshop</h1>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-2 text-center">My Personal Projects</h2>

                        <p class="mt-4 font-semibold text-gray-400 text-center max-w-1/2 capitalize mb-12">I am passionate about crafting high-quality web applications and bringing ideas to life through code.</p>

                        <div id="LabContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-3 lg:gap-x-6 place-items-center">

                            @foreach($labs as $lab)
                                @include('components.labs-content', ['lab' => $lab])
                            @endforeach

                        </div><!-- labs Contents-->

                    </div><!-- Flex 1 -->
                </div>
            </div> <!-- Container Block -->
        </div>
    </div>


    @livewire('contact-form')
@endsection
