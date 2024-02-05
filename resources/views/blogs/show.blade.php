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
            <!--Blog content-->
           
            <div class="bg-white py-8 -mx-4">
                <div class="container mx-auto flex justify-center flex-col md:flex-row">
                    <div class="w-full md:w-3/4">
                        <div class="w-full px-4 mb-6">
                            <div class="mb-4">
                                <h1 class="text-4xl font-bold text-gray-800 text-center mb-4 leading-snug">{{$blog->title}}</h1>
                                <time datetime="2023" class="text-gray-500 text-sm"><i class="fa-regular fa-clock fa-fw"></i>{{ $blog->created_at->diffForHumans() }}</time>
                            </div>
                            @if($blog->image_path())
                            <img src="{{ asset($blog->image_path()) }}" alt="{{ $blog->alt_image }}" class="mb-8 w-full">
                            @endif
                            <div class="w-full" id="blog-content">{!! $blog->content !!}</div>                    
                        </div>
                    </div>    
                    
                    
                </div>
            </div>        
        </div>
    </div>
</div>

@endsection('content')      