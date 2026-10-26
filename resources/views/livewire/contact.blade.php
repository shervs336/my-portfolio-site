
<div>
    <div id="contact" class="flex justify-center bg-white text-gray-900 dark:bg-[#0B1120] transition-colors duration-300 dark:text-slate-100">
        <div class="container flex max-w-7xl flex-col justify-between space-y-4 py-12 md:flex-row md:space-y-0 md:space-x-4">
            <div class="flex w-full flex-col items-start px-2 md:px-0">

                @if($messageSent)
                    <div class="mb-1 w-full text-center text-3xl font-bold text-gray-900 dark:text-slate-100">
                        🎊 Thank you for contacting me!
                    </div>

                    <div class="w-full text-center text-2xl font-bold text-gray-600 dark:text-slate-300">
                        I will send you a response once I read your message.
                    </div>

                    <div class="mt-6 w-full px-3">
                        <button
                            wire:click.prevent="sendNewMessage()"
                            type="button"
                            class="mx-auto block rounded bg-blue-600 px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-sm transition duration-200 hover:bg-blue-700 hover:shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-[#111827]"
                        >
                            Send a New Message
                        </button>
                    </div>
                @else
                    <form class="w-full md:mx-auto" wire:submit.prevent="sendMessage">
                        <h1 class="text-center text-2xl font-bold text-blue-700 dark:text-blue-400">
                            Get in touch 🤙
                        </h1>

                        <h2 class="mt-2 text-center text-4xl font-bold text-gray-900 dark:text-slate-100 lg:text-5xl">
                            Let's Collaborate!
                        </h2>

                        <p class="mt-4 text-center text-sm text-gray-600 dark:text-slate-300">
                            Have a Project in Mind or Just Want to Get in Touch?
                        </p>

                        <div class="mx-auto max-w-3xl wow animate__animated animate__fadeInUp">
                            <div class="flex w-full flex-wrap">

                                @if($errorMessage)
                                    <div class="mb-6 w-full px-3">
                                        <p role="alert" class="mt-4 text-center text-sm text-red-600 dark:text-red-400">
                                            <i class="fa-solid fa-circle-exclamation fa-fw" aria-hidden="true"></i>
                                            {{ $errorMessage }}
                                        </p>
                                    </div>
                                @endif

                                <div class="mb-6 w-full px-3 md:w-1/2">
                                    <label for="email" class="block py-2 text-sm font-bold text-gray-800 dark:text-slate-200">
                                        Email
                                    </label>
                                    <input
                                        wire:model="email"
                                        type="email"
                                        id="email"
                                        autocomplete="email"
                                        placeholder="you@example.com"
                                        required
                                        class="block w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-gray-900 placeholder:text-gray-400 outline-none transition duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400"
                                    >
                                </div>

                                <div class="mb-6 w-full px-3 md:w-1/2">
                                    <label for="company" class="block py-2 text-sm font-bold text-gray-800 dark:text-slate-200">
                                        Company Name (Optional)
                                    </label>
                                    <input
                                        wire:model="company"
                                        type="text"
                                        id="company"
                                        autocomplete="organization"
                                        placeholder="Your company"
                                        class="block w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-gray-900 placeholder:text-gray-400 outline-none transition duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400"
                                    >
                                </div>

                                <div class="mb-6 w-full px-3 md:w-1/2">
                                    <label for="name" class="block py-2 text-sm font-bold text-gray-800 dark:text-slate-200">
                                        Name
                                    </label>
                                    <input
                                        wire:model="name"
                                        type="text"
                                        id="name"
                                        autocomplete="name"
                                        placeholder="Your name"
                                        required
                                        class="block w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-gray-900 placeholder:text-gray-400 outline-none transition duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400"
                                    >
                                </div>

                                <div class="mb-6 w-full px-3 md:w-1/2">
                                    <label for="phone" class="block py-2 text-sm font-bold text-gray-800 dark:text-slate-200">
                                        Phone (Optional)
                                    </label>
                                    <input
                                        wire:model="phone"
                                        type="tel"
                                        id="phone"
                                        autocomplete="tel"
                                        placeholder="Your phone number"
                                        class="block w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-gray-900 placeholder:text-gray-400 outline-none transition duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400"
                                    >
                                </div>

                                <div class="mb-6 w-full px-3">
                                    <label for="message" class="block py-2 text-sm font-bold text-gray-800 dark:text-slate-200">
                                        Your message
                                    </label>
                                    <textarea
                                        wire:model="message"
                                        id="message"
                                        rows="6"
                                        placeholder="Type your message here..."
                                        required
                                        class="block w-full resize-y rounded-md border border-gray-300 bg-white px-4 py-3 text-gray-900 placeholder:text-gray-400 outline-none transition duration-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100 dark:placeholder:text-slate-400"
                                    ></textarea>
                                </div>

                                <div class="mb-6 w-full px-3">
                                    <button
                                        type="submit"
                                        wire:loading.attr="disabled"
                                        wire:target="sendMessage"
                                        class="mx-auto block rounded bg-blue-600 px-8 py-3 text-sm font-semibold uppercase tracking-wide text-white shadow-sm transition duration-200 hover:bg-blue-700 hover:shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60 dark:focus-visible:ring-offset-[#111827]"
                                    >
                                        <span wire:loading.remove wire:target="sendMessage">Send Message</span>
                                        <span wire:loading wire:target="sendMessage">Sending...</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
</div>
