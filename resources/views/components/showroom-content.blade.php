
<div class="max-w-sm rounded overflow-hidden shadow-lg brightness-95 ">
  <img class="w-full md:w-full rounded-lg h-64" src="{!!asset('storage/'.$work->background_image_path)!!}" alt="work">
  <div class="px-6 py-4">
      <div class="font-semibold text-xl mb-2">{{$work->title}}</div>
      <p class="text-gray-400 text-base">{{$work->caption}}</p>
  </div>
  <div class="px-6 pt-4 pb-2"> 
    @if($work->stack)
      @foreach(explode(',', $work->stack) as $tech)
        <span class="inline-block rounded-full px-3 py-1 uppercase text-xs tracking-wider font-semibold mr-2 mb-2 tag-default tag-{{$tech ?? 'default'}}">{{ $tech }}</span> 
      @endforeach
    @endif
  </div>
</div>
                               

                        
                