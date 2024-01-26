<div class="max-w-[18rem] rounded-lg bg-white dark:bg-neutral-700">
  <div class="relative overflow-hidden bg-cover bg-no-repeat">
    <img class="w-full rounded-lg" src="{!! !empty($blog->main_image)? asset('storage/'.$blog->main_image): asset('images/default.webp')!!}" alt="" /></div>
    <div class="pt-6 pb-3">
    <h3 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50 text-justify">
      <a href="{{ route('blog.view', ['slug' => $blog->slug]) }}">{{$blog->title}}</a>
    </h3>
  </div>
</div>   