<div class="max-w-[18rem] md:max-w-[20rem] lg:max-w-[24rem] rounded-lg bg-white shadow-lg">
    <div class="relative overflow-hidden bg-cover bg-no-repeat">
        <img class="w-full rounded-t-lg" src="{!! !empty($blog->main_image)? asset('storage/'.$blog->main_image): asset('images/default.webp')!!}" alt="" />
    </div>
    <div class="pt-6 pb-4 px-6">
        <h3 class="mb-2 text-xl font-medium tracking-wide text-neutral-800 dark:text-neutral-50">
            <a href="{{ route('blog.view', ['slug' => $blog->slug]) }}">{{$blog->title}}</a>
        </h3>
        <small class="text-gray-500">
            <i class="fa-regular fa-clock fa-fw"></i></i> {{ $blog->created_at->diffForHumans() }}
        </small>
    </div>
</div>
