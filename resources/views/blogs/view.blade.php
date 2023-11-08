@extends('layouts.app')

@section('content')
<div class="flex justify-center" id="showroom">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between">
                        <div class="w-full flex flex-col">
                            <div class="flex-1"> 
                               
                                <h1 class="text-5xl font-bold mt-2 text-center">{{$blog->title}}</h1>

                                <div class="flex items-center gap-x-4 text-xs">
                                      <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Sherwin Rhey Condez</a>
                                      <time datetime="2023" class="text-gray-500">Nov. 8, 2023</time>
                                </div>

                                <div class="w-full mb-10">
                                    <div class="mb-8 overflow-hidden rounded">
                                        <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009278906" alt="image" class="w-full"/>
                                    </div>
                                </div>

                                <p class="mt-4 font-normal text-gray-800 text-justify max-w-1/2">As of now, you have heard that Apple released four new phones this year and the most anticipated and jaw-dropping device is probably the iPhone 15 Pro Max. Packed with pro-level specs, this powerhouse boasts a faster processor, an enhanced zoom camera featuring a 120mm periscope telephoto lens, and the capability for console gaming. Its lighter yet durable titanium build adds to the allure. From its cutting-edge camera capabilities to its gaming prowess, this device aims to set new standards in the smartphone world.</p>

                                <p class="text-2xl font-bold mt-2 text-center">Super Retina XDR display</p>

                                <p class="mt-4 font-normal text-gray-800 text-justify max-w-1/2">The iPhone 15 Pro display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 6.12 inches diagonally (actual viewable area is less).</p>


                            </div><!-- Flex 1 -->
                        </div>
                    </div> <!-- Container Block -->
                </div>
            </div>
@endsection('content')      