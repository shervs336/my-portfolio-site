
<div class="max-w-[18rem] md:max-w-[20rem] lg:max-w-[24rem] rounded-lg
            border border-gray-200 bg-white shadow-lg
            dark:border-slate-700 dark:bg-slate-800/70 dark:shadow-none
            transition-colors duration-300
            wow animate__animated animate__fadeInUp">

    <div class="relative overflow-hidden bg-cover bg-no-repeat">
        <img
            class="w-full rounded-t-lg"
            src="{!! !empty($blog->main_image) ? asset('storage/'.$blog->main_image) : asset('images/default.webp') !!}"
            alt="{{ $blog->title }}"
            loading="lazy"
        />
    </div>

    <div class="px-6 pt-6 pb-4">
        <h3 class="mb-2 text-xl font-medium tracking-wide
                   text-gray-900 dark:text-slate-100">
            <a
                href="{{ route('blog.view', ['slug' => $blog->slug]) }}"
                class="transition-colors duration-200 hover:text-blue-700
                       dark:hover:text-blue-400"
            >
                {{ $blog->title }}
            </a>
        </h3>

        <small class="text-gray-500 dark:text-slate-400">
            <i class="fa-regular fa-clock fa-fw" aria-hidden="true"></i>
            <span>{{ $blog->created_at->diffForHumans() }}</span>
        </small>
    </div>
</div>
