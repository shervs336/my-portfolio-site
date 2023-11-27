@extends('layouts.app')

@section('content')
    <div class="flex justify-center" id="hero">
        <div class="container max-w-7xl py-24 border-b">
            <div class="container mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row items-center justify-between">
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
                <div class="w-full md:w-1/2 flex justify-end">
                <img src="{{asset('images/hero-image.png')}}" alt="Image Here" class="w-90 rounded-full h-auto shadow-md">
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center" id="about" >
        <div class="container max-w-7xl py-24 border-b">
            <div class="container margin:auto mx-auto flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-blue-500 uppercase">About Me</h1>
                        <h2 class="text-5xl font-bold mt-2">Crafting code, connecting worlds.</h2>
                        <p class="mt-4 text-gray-400">Passionate and Dedicated Full Stack Developer with a Strong Drive for Excellence, Leveraging Cutting-edge Technologies to Craft Innovative, Seamless, and Scalable Solutions that Empower Businesses, Delight Users, and Drive Digital Transformation in a Connected World.</p>
                    </div>
                </div>
                <div class="w-full flex flex-col items-start">
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
        <div class="container max-w-7xl py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">What I Offer?</h1>
                        <h2 class="text-5xl font-bold mt-2 text-center">My Services</h2>
                        <p class="mt-4 mb-5 font-semibold text-gray-800 text-center max-w-1/2 mb-12">Unlocking Your Full Potential: My Comprehensive Range of Services</p>
            
                        <!--Services-->           
                        <div class="container mx-auto flex flex-col space-y-6 md:space-y-0 md:space-x-4 md:flex-row justify-between">
                            <div class="md:w-1/3 rounded-xl shadow-md py-16 bg-blue-50">
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

                            <div class="md:w-1/3 rounded-xl shadow-md py-16 bg-blue-50">
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

                            <div class="md:w-1/3 rounded-xl shadow-md py-16 bg-blue-50">
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
        <div class="container max-w-7xl py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">Visit my</h1>
                        <h2 class="text-5xl font-bold mt-2 text-center">Showroom</h2>

                        <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize mb-12">Witness the seamless integration of technology and creativity in my showroom</p>

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

    <div class="flex justify-center" id="blog">
        <div class="container max-w-7xl py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">Recent Posts</h1>
                        <h2 class="text-5xl font-bold mt-2 text-center">My Dev Adventures</h2>

                        <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize mb-12">Learn about my day-to-day adventures as I tackle new problems and solutions along the way.</p>

                        <div id="BlogContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-3 lg:gap-x-6 place-items-center">

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

    <div class="flex justify-center" id="labs">
        <div class="container max-w-7xl py-24 border-b">
            <div class="container margin:auto mx-auto flex justify-between">
                <div class="w-full flex flex-col">
                    <div class="flex-1"> 
                        <h1 class="text-2xl font-bold text-blue-500 text-center">My Workshop</h1>
                        <h2 class="text-5xl font-bold mt-2 text-center">My Personal Projects</h2>

                        <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize mb-12">I am passionate about crafting high-quality web applications and bringing ideas to life through code.</p>

                        <div id="LabContents" class="mt-6 gap-y-12 grid grid-cols-1 md:grid-cols-3 lg:gap-x-6">

                            @foreach($labs as $lab)
                                @include('components.labs-content', ['lab' => $lab])
                            @endforeach

                        </div><!-- labs Contents-->

                    </div><!-- Flex 1 -->
                </div>
            </div> <!-- Container Block -->
        </div>
    </div>


    <!--Register Form section-->
    <div class="flex justify-center" id="contact" >
        <div class="container max-w-7xl py-12 flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
            <div class="w-full flex flex-col items-start px-2 md:px-0">
                <form class="w-full md:ml-auto">
                    <h1 class="text-2xl font-bold text-blue-500 text-center">Get in touch 🤙</h1>
                    <h2 class="text-5xl font-bold mt-2 text-center">Let's Collaborate!</h2>
                    <p class="mt-4 text-sm text-gray-400 text-center">Have a Project in Mind or Just Want to Get in Touch?</p>
                    <div class="max-w-3xl mx-auto">
                        <div class="w-full flex flex-wrap -mx-3">
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Company Name (Optional)</label>
                                <input type="email" id="email" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Name</label>
                                <input type="email" id="email" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="password" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Phone (Optional)</label>
                                <input type="password" id="password" class="peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" required>
                            </div>
                            <div class="mb-6 w-full px-3">
                                <label for="message" class="block py-2 text-sm font-bold text-gray-900 dark:text-gray-900">Your message</label>
                                <textarea id="message" rows="6" class="peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Type your message here..."></textarea>
                            </div>
                            <div class="mb-6 w-full px-3">
                                <button type="submit" class=" mx-auto block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                    data-te-ripple-init data-te-ripple-color="dark">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
