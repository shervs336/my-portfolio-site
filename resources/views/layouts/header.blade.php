
<nav
    class="bg-blue-700 text-white shadow-sm transition-colors duration-300 dark:bg-[#0B1120]"
    x-data="{ open: false }"
    @keydown.escape.window="open = false"
>
    <div class="container mx-auto max-w-7xl px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="rounded text-2xl font-bold tracking-wide text-white transition-colors hover:text-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-white"
                aria-label="Sherwin Rhey Condez - Home"
            >
                &lt;/SRC&gt;
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden items-center space-x-5 md:flex">
                <a href="{{ route('home') }}"
                   class="font-medium tracking-wide text-white transition-colors hover:text-blue-200 hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    Home
                </a>

                <a href="{{ route('home') }}#about"
                   class="font-medium tracking-wide text-white transition-colors hover:text-blue-200 hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    About
                </a>

                <a href="{{ route('home') }}#contact"
                   class="font-medium tracking-wide text-white transition-colors hover:text-blue-200 hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    Contact
                </a>

                <a href="{{ route('blog.index') }}"
                   class="font-medium tracking-wide text-white transition-colors hover:text-blue-200 hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    Blog
                </a>

                <a href="{{ route('home') }}#labs"
                   class="font-medium tracking-wide text-white transition-colors hover:text-blue-200 hover:underline focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                    Labs
                </a>

                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ route('admin.index') }}"
                            class="rounded-full bg-white px-4 py-2 font-semibold text-blue-800 transition-colors hover:bg-blue-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-blue-700 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600 dark:focus-visible:ring-offset-[#0B1120]"
                        >
                            Dashboard
                        </a>
                    @endauth
                @endif
            </div>

            <!-- Mobile Menu Toggle -->
            <button
                type="button"
                class="rounded p-2 text-white transition-colors hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-white md:hidden"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-controls="mobile-menu"
                :aria-label="open ? 'Close navigation menu' : 'Open navigation menu'"
            >
                <!-- Hamburger Icon -->
                <svg
                    x-show="!open"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    aria-hidden="true"
                >
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <!-- Close Icon -->
                <svg
                    x-show="open"
                    x-cloak
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    aria-hidden="true"
                >
                    <path stroke-linecap="round" stroke-linejoin="round"
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
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        @click.outside="open = false"
        class="border-t border-white/15 bg-blue-800 dark:border-slate-700 dark:bg-[#111827] md:hidden"
    >
        <div class="space-y-1 px-4 pt-3 pb-4">
            <a href="{{ route('home') }}"
               @click="open = false"
               class="block rounded-lg px-3 py-2 font-medium text-blue-100 transition-colors hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                Home
            </a>

            <a href="{{ route('home') }}#about"
               @click="open = false"
               class="block rounded-lg px-3 py-2 font-medium text-blue-100 transition-colors hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                About
            </a>

            <a href="{{ route('home') }}#contact"
               @click="open = false"
               class="block rounded-lg px-3 py-2 font-medium text-blue-100 transition-colors hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                Contact
            </a>

            <a href="{{ route('blog.index') }}"
               @click="open = false"
               class="block rounded-lg px-3 py-2 font-medium text-blue-100 transition-colors hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                Blog
            </a>

            <a href="{{ route('home') }}#labs"
               @click="open = false"
               class="block rounded-lg px-3 py-2 font-medium text-blue-100 transition-colors hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                Labs
            </a>

            @if (Route::has('login'))
                @auth
                    <a
                        href="{{ route('admin.index') }}"
                        @click="open = false"
                        class="mt-3 block rounded-lg bg-white px-3 py-2 text-center font-semibold text-blue-800 transition-colors hover:bg-blue-100 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600"
                    >
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
