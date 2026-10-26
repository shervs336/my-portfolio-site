
<!-- Footer -->
<footer class="bg-blue-950 text-white transition-colors duration-300 dark:bg-[#0B1120]">
    <div class="container mx-auto flex max-w-7xl flex-col justify-between space-y-8 border-b border-blue-800/60 px-4 md:space-y-0 lg:flex-row lg:space-x-4">
        <div class="lg:w-1/2 md:flex">
            <!-- Logo and Social Links -->
            <div class="px-2 py-12 text-center md:w-1/2 lg:text-left lg:py-16">
                <a href="{{ route('home') }}"
                   class="text-2xl font-bold text-white transition-colors hover:text-blue-300">
                    &lt;/SRC&gt;
                </a>

                <div class="mt-4 flex justify-center space-x-2 lg:justify-start">
                    <a href="https://www.upwork.com/freelancers/sherwinrheycondez"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Upwork"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-lime-500 hover:bg-lime-600 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-upwork" aria-hidden="true"></i>
                    </a>

                    <a href="https://github.com/shervs336"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="GitHub"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-gray-950 hover:bg-gray-950 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-github" aria-hidden="true"></i>
                    </a>

                    <a href="https://www.facebook.com/sherwinrheycondez"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Facebook"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-blue-600 hover:bg-blue-600 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="https://twitter.com/SherwinRhey"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="X"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-black hover:bg-black hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/sherwinrheycondez/"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="LinkedIn"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-sky-600 hover:bg-sky-600 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                    </a>

                    <!-- Replace # with your YouTube channel URL when available -->
                    <a href="#"
                       aria-label="YouTube"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 text-slate-300 transition-colors hover:border-red-600 hover:bg-red-600 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="space-y-4 px-2 py-8 md:w-1/2 md:py-12 lg:py-16">
                <h6 class="mb-3 text-center text-2xl font-semibold text-white">
                    Links
                </h6>

                <ul class="grid list-none grid-cols-2">
                    <li class="py-3 text-center md:py-2">
                        <a href="{{ route('home') }}"
                           class="text-blue-100 transition-colors hover:text-white hover:underline">
                            Home
                        </a>
                    </li>

                    <li class="py-3 text-center md:py-2">
                        <a href="{{ route('home') }}#about"
                           class="text-blue-100 transition-colors hover:text-white hover:underline">
                            About
                        </a>
                    </li>

                    <li class="py-3 text-center md:py-2">
                        <a href="{{ route('home') }}#contact"
                           class="text-blue-100 transition-colors hover:text-white hover:underline">
                            Contact
                        </a>
                    </li>

                    <li class="py-3 text-center md:py-2">
                        <a href="{{ route('blog.index') }}"
                           class="text-blue-100 transition-colors hover:text-white hover:underline">
                            Blog
                        </a>
                    </li>

                    <li class="py-3 text-center md:py-2">
                        <a href="{{ route('home') }}#labs"
                           class="text-blue-100 transition-colors hover:text-white hover:underline">
                            Labs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="px-2 py-12 md:py-12 lg:w-1/2 lg:py-16">
            <form action="" method="POST" class="space-y-4">
                <div class="w-full">
                    <p class="text-center text-2xl font-semibold text-white xl:text-left xl:pl-20">
                        Join my newsletter
                    </p>
                </div>

                <div class="relative mx-4 xl:mx-0">
                    <label for="newsletter-email"
                           class="mb-2 block text-sm font-medium text-blue-100 xl:ml-20">
                        Email address
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="newsletter-email"
                        autocomplete="email"
                        placeholder="you@example.com"
                        required
                        class="mx-auto block w-full rounded-md border border-slate-600 bg-slate-800 px-4 py-3 text-white placeholder:text-slate-400 outline-none transition duration-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-400/30 xl:ml-20 xl:w-5/6"
                    >
                </div>

                <div class="w-full text-center xl:text-left">
                    <button
                        type="submit"
                        class="inline-block rounded-md bg-blue-600 px-6 py-3 text-sm font-semibold uppercase text-white shadow-sm transition duration-200 hover:bg-blue-500 hover:shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-300 focus-visible:ring-offset-2 focus-visible:ring-offset-blue-950 xl:ml-20"
                    >
                        Join
                    </button>
                </div>
            </form>
        </div>
    </div>
</footer>

<!-- Copyright Section -->
<div class="bg-blue-950 py-8 transition-colors duration-300 dark:bg-[#0B1120]">
    <div class="container mx-auto flex max-w-7xl flex-col justify-center px-4 py-4 md:flex-row">
        <p class="text-center text-sm font-medium text-blue-100">
            © {{ date('Y') }}
            <a href="{{ route('home') }}"
               class="transition-colors hover:text-blue-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                Sherwin Rhey Condez
            </a>.
            All rights reserved.
        </p>
    </div>
</div>
