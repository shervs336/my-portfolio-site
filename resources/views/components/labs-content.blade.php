
<div class="block max-w-[18rem] overflow-hidden rounded-lg
            border border-gray-200 bg-white
            shadow-sm dark:border-slate-700 dark:bg-slate-800/70
            dark:shadow-none transition-colors duration-300
            wow animate__animated animate__fadeInUp">

    <div class="relative overflow-hidden bg-cover bg-no-repeat">
        <img
            class="aspect-[4/3] w-full rounded-t-lg object-cover"
            src="{!! !empty($lab->main_image) ? asset('storage/'.$lab->main_image) : asset('images/default.webp') !!}"
            alt="{{ $lab->title }}"
            loading="lazy"
        />
    </div>

    <div class="p-6">
        <h5 class="mb-2 text-xl font-medium leading-tight
                   text-gray-900 dark:text-slate-100">
            {{ $lab->title }}
        </h5>

        <p class="text-base text-gray-600 dark:text-slate-300">
            {{ $lab->excerpt }}
        </p>
    </div>

    <div class="px-6 pb-6">
        <a
            href="{{ $lab->url ?? '#' }}"
            class="inline-block rounded text-base font-medium
                   text-blue-700 transition-colors duration-200
                   hover:text-blue-900
                   focus:outline-none focus-visible:ring-2
                   focus-visible:ring-blue-500 focus-visible:ring-offset-2
                   dark:text-blue-400 dark:hover:text-blue-300
                   dark:focus-visible:ring-offset-slate-800"
        >
            See more
            <span aria-hidden="true">&rarr;</span>
        </a>
    </div>
</div>
