@extends('layouts.app')

@section('title', $blog->title)

@section('meta_data')
    <meta name="description" content="{{ $blog->meta_description }}" />
    <meta property="og:title" content="{{ $blog->meta_title }}" />
    <meta property="og:description" content="{{ $blog->meta_description }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset($blog->image_path()) }}" />
@endsection

@section('custom_styles')
    <style>
        #blog-content p, #blog-content ul, #blog-content ol {
            margin-bottom: 1rem
        }
        #blog-content p {
            text-align: justify;
        }
        #blog-content ul > li, #blog-content ol > li {
            margin-left: 1rem
        }
    </style>
@endsection

@section('content')

<div class="flex justify-center" id="showroom">
    <div class="container max-w-7xl pt-4 pb-24 border-b">
        <div class="flex flex-col">
            <div class="bg-slate-50 py-8">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl font-bold text-gray-800 w-2/3 mb-4 leading-snug">{{$blog->title}}</h1>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 py-1.5 font-normal text-sm text-blue-600 hover:underline"><i class="fa-solid fa-at fa-fw"></i> Sherwin Rhey Condez</a>
                    <time datetime="2023" class="text-gray-500 text-sm"><i class="fa-regular fa-clock fa-fw"></i>{{ $blog->created_at->diffForHumans() }}</time>
                </div>
            </div>

            <!--Blog content-->
           
            <div class="bg-white py-8 -mx-4">
                <div class="container mx-auto flex flex-col md:flex-row">
                    <div class="w-full md:w-3/4">
                        <div class="w-full px-4 mb-6">
                            @if($blog->image_path())
                            <img src="{{ asset($blog->image_path()) }}" alt="{{ $blog->alt_image }}" class="mb-8 w-full">
                            @endif
                            <div class="w-full" id="blog-content">{!! $blog->content !!}</div>                    
                        </div>
                    </div>    
                    
                    <div class="w-full md:w-1/4 px-4">
                        <div class="mb-4">
                            <a href="{{ route('blog.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mr-4 transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                                View all Posts
                            </a>
                        </div>
                        @foreach ($otherBlogs as $blog)
                            <div class="bg-gray-100 p-4 mb-4">
                                @if($blog->image_path())       
                                <img src="{{ asset($blog->image_path()) }}" alt="{{ $blog->alt_image }}" class="mb-6">
                                @endif
                                <p class="text-neutral-400 text-xs font-semibold">{{ $blog->created_at}}</p>
                                <h5 class="text-base font-semibold text-gray-800 mb-4">{{ $blog->title}}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

@endsection('content')      