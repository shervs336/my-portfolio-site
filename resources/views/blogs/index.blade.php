@extends('layouts.app')

@section('content')

<div class="flex justify-center" id="showroom">
    <div class="container max-w-7xl py-24 border-b">
        <div class="w-full flex flex-row items-center mb-4">
            <div class="w-3/4 py-8">
                <div class="mx-auto px-4">
                    <h1 class="text-4xl font-bold text-gray-800 mb-2">My Recent Posts</h1>
                </div>
            </div>
            <div class="w-1/4 py-8 text-right">
                <a href="{{ route('blog.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4 transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                    View Other Posts
                </a>
            </div>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-3/4"> 
                <div class=py-8">
                    <div class="container mx-auto px-4">
                        @forelse($blogs as $blog)
                        <div class="mb-8 cursor-pointer bg-white" x-data="{ url: '{{ route('blog.view', $blog->slug) }}' }">
                            <div x-on:click="window.open(url, '_self')">
                                <img src="{{ asset($blog->image_path()) }}" alt="Blog Featured Image" class="mb-4 w-full aspect-[16/9]">
                                <h2 class="text-xl font-bold mb-2 px-4">{{ $blog->title}}</h2>
                                <p class="text-gray-800 px-4">{{ $blog->excerpt }}</p>
                                <time datetime="2023" class="text-neutral-400 text-xs font-semibold px-4">{{ $blog->created_at}}</time>
                            </div>
                        </div>
                        @empty
                            <div>No Blogs Found</div>
                        @endforelse
                    </div>
                </div>
            </div>
                    

            <div class="w-full md:w-1/4"> 
                <div class="">
                    <div class="container mx-auto px-4">
                        <!-- View Next Blog button -->
                        <div class="mb-4">
                            @forelse($blogs as $blog)
                            <div class="mb-8 pb-4 bg-white cursor-pointer" x-data="{ url: '{{ route('blog.view', $blog->slug) }}' }">
                                <div x-on:click="window.open(url, '_self')">
                                    <img src="{{ asset($blog->image_path()) }}" alt="Blog Featured Image" class="mb-4 w-full aspect-[16/9]">
                                    <h2 class="text-xl font-bold mb-2 px-4">{{ $blog->title}}</h2>
                                    <time datetime="2023" class="text-neutral-400 text-xs font-semibold px-4">{{ $blog->created_at}}</time>
                                </div>
                            </div>
                            @empty
                                <div>No Blogs Found</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection('content')      