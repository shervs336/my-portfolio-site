<div class="block max-w-[18rem] rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
  <div class="relative overflow-hidden bg-cover bg-no-repeat">
    <img class="w-full aspect-[4/3] rounded-t-lg" src="{!! !empty($blog->main_image)? asset('storage/'.$blog->main_image): asset('images/default.webp')!!}" alt="" /></div>
    <div class="p-6">
    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">{{$blog->title}}</h5>
    <p class="text-base text-neutral-600 dark:text-neutral-200">{{$blog->excerpt}}</p></div>

  <div class="p-6">
    <a type="button" href="#" class=" text-blue-500 hover:text-blue-900 pointer-events-auto mr-5 inline-block cursor-pointer rounded text-base font-normal leading-normal text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700">
      See more
    </a>
  
  </div>
</div>   