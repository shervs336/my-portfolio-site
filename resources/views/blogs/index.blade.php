@extends('layouts.app')

@section('content')

<div class="flex justify-center" id="showroom">
    <div class="container max-w-7xl py-24 border-b">
        <div class="flex flex-col">
            <div class="bg-slate-50 py-8">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">Blogs</h1>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-normal text-sm text-blue-600 hover:bg-gray-100">Sherwin Rhey Condez</a>
                </div>
            </div>
            

            <div class="bg-white py-8">
                <div class="container mx-auto px-4 flex flex-col md:flex-row">
                    <div class="w-full md:w-3/4 px-4">
                        @forelse($blogs as $blog)
                        <div>
                            <img src ="{{ asset($blog->image_path()) }}" alt="Blog Featured Image" class="mb-8 w-full aspect-[16/9]">
                            <h2 class="text-xl font-bold mb-2">{{ $blog->title}}</h2>
                            <p class="text-gray-800">{{ $blog->excerpt }}</p>
                            <time datetime="2023" class="text-blue-500 text-sm">Nov. 8, 2023</time>  
                            
                        </div>

                        @empty
                            
                            <div>No Blogs Found</div>

                        @endforelse
                    </div>    
                        
            
                    <div class="w-full md:w-1/4 px-4">
                        <div class="bg-gray-100 p-4">       
                            <img src="" alt="Featured Image" class="mb-6">
                            <p class="text-gray-500 text-xs">google.com</p>
                            <h5 class="text-base font-bold text-gray-800 mb-4"></h5>
                        </div>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')      