<nav class="bg-blue-700" x-data="{ open: false }">
    <div class="container max-w-7xl mx-auto py-4 px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}"
               class="text-2xl font-bold tracking-wide text-white hover:text-slate-200 hover:animate-pulse">
                &lt;/SRC&gt;
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center space-x-4">
                <a href="{{ route('home') }}" class="tracking-wide font-medium text-white hover:text-slate-200 hover:underline">Home</a>
                <a href="#about" class="tracking-wide font-medium text-white hover:text-slate-200 hover:underline">About</a>
                <a href="#contact" class="tracking-wide font-medium text-white hover:text-slate-200 hover:underline">Contact</a>
                <a href="{{ route('blog.index') }}" class="tracking-wide font-medium text-white hover:text-slate-200 hover:underline">Blog</a>
                <a href="#labs" class="tracking-wide font-medium text-white hover:text-slate-200 hover:underline">Labs</a>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('admin.index') }}"
                           class="bg-slate-300 text-gray-700 py-2 px-4 rounded-full hover:bg-blue-900 hover:text-white hover:animate-pulse">
                            Dashboard
                        </a>
                    @endauth
                @endif
            </div>

            <!-- Mobile Menu Toggle -->
            <button
                type="button"
                class="md:hidden text-white focus:outline-none focus:ring-2 focus:ring-white rounded p-1"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-controls="mobile-menu"
                :aria-label="open ? 'Close navigation menu' : 'Open navigation menu'"
            >
                <!-- Hamburger Icon -->
                <svg x-show="!open"
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <!-- Close Icon -->
                <svg x-show="open"
                     x-cloak
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div
        id="mobile-menu"
        x-show="open"
        x-cloak
        x-transition
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        class="md:hidden"
    >
        <div class="px-4 pt-2 pb-4">
            <a href="{{ route('home') }}"
               @click="open = false"
               class="block text-slate-300 font-semibold hover:text-white py-2">
                Home
            </a>

            <a href="#about"
               @click="open = false"
               class="block text-slate-300 font-semibold hover:text-white py-2">
                About
            </a>

            <a href="#contact"
               @click="open = false"
               class="block text-slate-300 font-semibold hover:text-white py-2">
                Contact
            </a>

            <a href="{{ route('blog.index') }}"
               @click="open = false"
               class="block text-slate-300 font-semibold hover:text-white py-2">
                Blog
            </a>

            <a href="#labs"
               @click="open = false"
               class="block text-slate-300 font-semibold hover:text-white py-2">
                Labs
            </a>

            @if (Route::has('login'))
                @auth
                    <a href="{{ route('admin.index') }}"
                       @click="open = false"
                       class="block mt-2 bg-slate-300 text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-blue-900 hover:text-white">
                        Dashboard
                    </a>
                @endauth
            @endif
        </div>
    </div>
</nav>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>