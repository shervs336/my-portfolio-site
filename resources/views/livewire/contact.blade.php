<div>
    <div class="flex justify-center" id="contact" >
        <div class="container max-w-7xl py-12 flex flex-col space-y-4 md:space-y-0 md:space-x-4 md:flex-row justify-between">
            <div class="w-full flex flex-col items-start px-2 md:px-0">
                @if($messageSent)
                    <div class="w-full text-3xl font-bold text-center text-gray mb-1">🎊 Thank you contacting me!</div>
                    <div class="w-full text-2xl font-bold text-center text-gray-500">I will send you a response once I read your message.</div>
                    <div class="mt-6 w-full px-3">
                        <button wire:click.prevent="sendNewMessage()" type="button" class=" mx-auto block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                    data-te-ripple-init data-te-ripple-color="dark">Send a New Message</button>
                    </div>
                @else
                <form class="w-full md:mx-auto">
                    <h1 class="text-2xl font-bold text-blue-500 text-center">Get in touch 🤙</h1>
                    <h2 class="text-5xl font-bold mt-2 text-center">Let's Collaborate!</h2>
                    <p class="mt-4 text-sm text-gray-400 text-center">Have a Project in Mind or Just Want to Get in Touch?</p>
                    <div class="max-w-3xl mx-auto">
                        <div class="w-full flex flex-wrap">
                            @if($errorMessage)
                                <div class="mb-6 w-full px-3">
                                    <p class="mt-4 text-sm text-gray-400 text-center"><i class="fa-solid fa-circle-exclamation fa-fw text-red-500"></i> {{ $errorMessage }}</p>
                                </div>
                            @endif
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Email</label>
                                <input wire:model="email" type="email" id="email" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Company Name (Optional)</label>
                                <input wire:model="company" type="text" id="company" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="email" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Name</label>
                                <input wire:model="name" type="text" id="name" class="pr-4 peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="youremail@example.com" required>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="phone" class="block py-2 text-sm font-bold text-gray-900 dark:text-white">Phone (Optional)</label>
                                <input wire:model="phone" type="text" id="phone" class="peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" required>
                            </div>
                            <div class="mb-6 w-full px-3">
                                <label for="message" class="block py-2 text-sm font-bold text-gray-900 dark:text-gray-900">Your message</label>
                                <textarea wire:model="message" id="message" rows="6" class="peer block min-h-[auto] w-full rounded border border-gray-300 bg-slate-50 px-1 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Type your message here..."></textarea>
                            </div>
                            <div class="mb-6 w-full px-3">
                                <button wire:click.prevent="sendMessage()" type="button" class=" mx-auto block rounded bg-blue-600 hover:bg-blue-700 px-6 pb-2 pt-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                    data-te-ripple-init data-te-ripple-color="dark">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>