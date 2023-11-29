    <nav class="bg-white" x-data="{ open: false }">
        <div class="container max-w-7xl mx-auto py-4">
            <div class="flex items-center justify-between">
            <a href="#" class="text-2xl font-bold">	&lt;/SRC&gt;</a>

            <div class="hidden md:flex md:items-center space-x-4">
                <a href="{{ route('home') }}" class=" hover:text-blue-500">Home</a>
                <a href="#about" class=" hover:text-blue-500">About</a>
                <a href="#contact" class="hover:text-blue-500">Contact</a>
                <a href="{{ route('blog.index') }}" class="hover:text-blue-500">Blog</a>
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
                <a href="{{ route('home') }}" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Home</a>
                <a href="#about" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">About</a>
                <a href="#contact" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Contact</a>
                <a href="{{ route('blog.index') }}" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Blog</a>
                <a href="#labs" class="block text-slate-300 font-semibold hover:text-blue-600 py-2">Labs</a>
                
            </div>
        </div>
    </nav>