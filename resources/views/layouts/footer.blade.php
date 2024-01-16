<!--Footer--> 
<footer class="bg-blue-950 brightness-95">
    <div class="container border-b max-w-7xl mx-auto flex flex-col space-y-4 space-x-2 md:space-y-0 md:space-x-4 lg:flex-row justify-between">
        <div class="lg:w-1/2 md:flex">
            <div class="md:w-1/2 py-16 px-2 text-center lg:text-left">
                <a href="#home" class="text-2xl font-bold text-white">	&lt;/SRC&gt;</a>

                <div class="mt-3 flex space-x-2 justify-center lg:justify-start">
                    <a href="https://www.upwork.com/freelancers/sherwinrheycondez" class="w-10 h-10 border hover:bg-lime-600 text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-upwork"></i>
                    </a>
                    <a href="https://github.com/shervs336" class="w-10 h-10 border hover:bg-gray-950  text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        </i><i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/sherwinrheycondez" class="w-10 h-10 border hover:bg-blue-600  text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/SherwinRhey" class="w-10 h-10 border hover:bg-black text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/sherwinrheycondez/" class="w-10 h-10 border hover:bg-sky-600  text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#" class="w-10 h-10 border hover:bg-red-500  text-gray-300 hover:text-blue-100 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div> 
            </div>
                
                
            <div class="ml-0 md:w-1/2 py-0 space-y-4 md:py-16 px-2">
                <h6 class="mb-2.5 font-semibold text-white text-2xl text-center">Links</h6>

                <ul class="mb-0 list-none grid grid-cols-2 lg:grid-cols-2">
                    <li class="text-center py-3 md:py-1">
                        <a href="{{ route('home') }}" class="text-blue-100 hover:text-blue-200">Home</a>
                    </li>
                    <li class="text-center py-3 md:py-1">
                        <a href="#about" class="text-blue-100 hover:text-blue-200">About</a>
                    </li>
                    <li class="text-center py-3 md:py-1">
                        <a href="#contact" class="text-blue-100 hover:text-blue-200">Contact</a>
                    </li>
                    <li class="text-center py-3 md:py-1">
                        <a href="#latest-blog" class="text-blue-100 hover:text-blue-200">Blog</a>
                    </li>
                    <li class="text-center py-3 md:py-1">
                        <a href="#labs" class="text-blue-100 hover:text-blue-200">Labs</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!--Sign-up form-->
        <div class="ml-0 lg:w-1/2 py-16 md:py-16 px-2">
            <form action="" class="justify-left md:justify-right space-y-4 gap-4 md:gap-2">
                <div class="">
                    <div class="w-full ml-0 xl:ml-auto">
                        <p class="text-center xl:text-left text-secondary-800 dark:text-secondary-200 ms-0 xl:ms-20 font-semibold text-white text-2xl">Join my newsletter</p>
                    </div>
                </div>

                <div class="relative mx-12 lg:mx-0" data-te-input-wrapper-init>
                    <input type="text" class="w-full lg:w-5/6 mx-auto xl:mx-0 xl:ms-20 peer block min-h-[auto]  rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email address"/>
                    <label for="exampleFormControlInput1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-slate-300 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-secondary-200 dark:peer-focus:text-secondary-200 mx-auto xl:mx-0 xl:ms-20">Email address</label>
                </div>
                        
                <div class="w-full lg:w-1/3 md:mr-auto space-y-4 text-center xl:text-left">
                    <button type="button" class="mx-auto xl:mx-0 xl:ms-20 inline-block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-blue-100 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                        data-te-ripple-init data-te-ripple-color="dark">Join</button>
                </div>
            </form>
        </div>
    </div>
</footer>

<!--Copyright Section--->
<div class="bg-blue-950 brightness-95 py-12">
    <div class="container max-w-7xl mx-auto py-4 flex flex-col md:flex-row justify-center px-4">
        <div class="text-xl text-gray-500 dark:text-gray-400 text-center font-semibold">
            <a href="https://github.com/shervs336" class="mx-auto hover:text-blue-200 text-blue-100 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">  
                All rights reserved by © Sherwin Rhey Condez 2024
            </a>
        </div>
    </div>
</div>