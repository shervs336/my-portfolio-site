
<div class="relative flex flex-col flex-1">                                   
    <div class="relative overflow-hidden h-96 w-full backdrop-blur-md bg-white/30 shadow-md rounded-lg bg-white  top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 z-0">
        <div class="z-0 absolute w-full h-full brightness-75">
            <div class="w-full h-full relative">
                <img class="absolute w-full h-full aspect-ratio brightness-75" src="{!!asset('storage/'.$work->background_image_path)!!}" />
            </div>
            <div class="w-full h-full overflow-hidden flex justify-center items-center bg-cover bg-center"></div>
        </div>
        <div class="z-10 absolute w-full h-full flex justify-center items-center group hover:bg-{{$work->overlay_color}}">
            <h1 class="group-hover:hidden text-3xl font-medium w-4/5 text-center text-slate-100 tracking-wide border-solid border rounded-md p-3 px-6 border-slate-100 uppercase">{{$work->title}}</h1>
            <div class="p-2 absolute transform  duration-300 inset-y-full group-hover:inset-y-auto group-hover:bottom-8 w-full">
                
                <p class="w-full tracking-tight text-xl text-white text-center font-extralight">{{$work->caption}}</p>                             
                
            </div> 
        </div>
    </div>
</div>
                                                    