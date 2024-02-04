    <nav class="bg-blue-700 -mx-8 px-4 xl:-mx-0 xl:px-0" x-data="{ open: false }">
        <div class="container max-w-7xl mx-auto py-4">
            <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wide text-white hover:text-slate-200 hover:animate-pulse">	&lt;/SRC&gt;</a>

            <div class="hidden md:flex md:items-center space-x-4">
                <a href="{{ route('home') }}" class="tracking-wide font-medium text-white hover:text-slate-200 hover:animate-pulse hover:underline-offset-8 hover:decoration-solid hover:underline hover:decoration-2 hover:decoration-inherit">Home</a>
                <a href="#about" class="tracking-wide font-medium text-white hover:text-slate-200 hover:animate-pulse hover:underline-offset-8 hover:decoration-solid hover:underline hover:decoration-2 hover:decoration-inherit">About</a>
                <a href="#contact" class="tracking-wide font-medium text-white hover:text-slate-200 hover:animate-pulse hover:underline-offset-8 hover:decoration-solid hover:underline hover:decoration-2 hover:decoration-inherit">Contact</a>
                <a href="{{ route('blog.index') }}" class="tracking-wide font-medium text-white hover:text-slate-200 hover:animate-pulse hover:underline-offset-8 hover:decoration-solid hover:underline hover:decoration-2 hover:decoration-inherit">Blog</a>
                <a href="#labs"  class="tracking-wide font-medium text-white hover:text-slate-200 hover:animate-pulse hover:underline-offset-8 hover:decoration-solid hover:underline hover:decoration-2 hover:decoration-inherit">Labs</a>
                @if (Route::has('login'))
    
                    @auth
                        <a href="{{ route('admin.index') }}" class="hover:text-gray-100 hover:bg-blue-900 bg-slate-300 text-gray-700 py-2 px-4 rounded-full hover:animate-pulse">Dashboard</a>
                    @endauth
                    
                @endif
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden text-white focus:outline-none" @click="open = true"> 
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
                <a href="{{ route('home') }}" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Home</a>
                <a href="#about" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">About</a>
                <a href="#contact" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Contact</a>
                <a href="{{ route('blog.index') }}" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Blog</a>
                <a href="#labs" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Labs</a>
                
            </div>
        </div>
    </nav>