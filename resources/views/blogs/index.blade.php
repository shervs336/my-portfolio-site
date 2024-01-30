@extends('layouts.app')

@section('content')

<div class="flex justify-center" id="showroom">
    <div class="container max-w-7xl py-24 border-b">
        <div class="flex flex-col">
            <div class="bg-slate-50 py-8">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">My Blog</h1>
                    <h2 class="text-lg text-gray-500 font-semi-bold mt-2">Let's code and learn together. Join me in my adventures as a freelance developer.</h2>
                </div>
            </div>
            

            <div class="bg-white py-8">
                <div class="container mx-auto px-4 flex flex-col md:flex-row">
                    <div class="w-full md:w-3/4 px-4">
                        @forelse($blogs as $blog)
                        <div class="mb-8">
                            <img src ="{{ asset($blog->image_path()) }}" alt="Blog Featured Image" class="mb-4 w-full aspect-[16/9]">
                            <h2 class="text-xl font-bold mb-2">{{ $blog->title}}</h2>
                            <p class="text-gray-800">{{ $blog->excerpt }}</p>
                            <time datetime="2023" class="text-neutral-400 text-xs">{{ $blog->created_at}}</time>  
                            <hr class="mt-6"/>
                        </div>

                        @empty
                            
                            <div>No Blogs Found</div>

                        @endforelse
                    </div>    
                        
                    
                    <div class="w-full md:w-1/4 px-4">
                        <div class="bg-gray-100 p-4">       
                            <img src="{{ asset($blog->image_path()) }}" alt="Featured Image" class="mb-6">
                            <p class="text-gray-500 text-xs">{{ $blog->created_at }}</p>
                            <h5 class="text-base font-bold text-gray-800 mb-4"></h5>
                        </div>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')      