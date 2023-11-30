@extends('layouts.app')

@section('content')

<div class="flex flex-col">
    <div class="bg-slate-50 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Blogs</h1>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-normal text-sm text-blue-600 hover:bg-gray-100">Sherwin Rhey Condez</a>
        </div>
    </div>
<br>
    <a href="#" class="text-blue-700 hover:text-indigo-600 text-right mr-6 pt-6">View all Post ></a>



    <div class="bg-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row">
            <div class="w-full md:w-3/4 px-4">
                <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009278906" alt="Blog Featured Image" class="mb-8">
                <h2 class="text-xl font-bold mb-2">First Blog Post</h2>
                <p class="text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <time datetime="2023" class="text-blue-500 text-sm">Nov. 8, 2023</time>      
                
                <div class="prose max-w-none">
                
                <br>
                <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009278906" alt="Blog Featured Image" class="mb-8">
                <h2 class="text-xl font-bold mb-2">First Blog Post</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <time datetime="2023" class="text-blue-500 text-sm">Nov. 8, 2023</time>
                        

                </div>
            </div>
            
            <div class="w-full md:w-1/4 px-4">
                <div class="bg-gray-100 p-4">       
                <img src="" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs"></p>
                <h5 class="text-base font-bold text-gray-800 mb-4"></h5>
                </div>
            <div class="bg-gray-100 p-4 mt-4">
                <div class="bg-gray-100 p-4">       
                <img src="https://s40424.pcdn.co/in/wp-content/uploads/2022/03/What-is-Information-Technology-1.jpg.optimal.jpg" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs">google.com</p>
                <h5 class="text-base font-bold text-gray-800 mb-4">IT firms utilization rates rise as demand slows down</h5>
                </div>
            </div>
            <div class="bg-gray-100 p-4 mt-4">
                <div class="bg-gray-100 p-4">       
                <img src="https://st.adda247.com/https://adda247jobs-wp-assets-adda247.s3.ap-south-1.amazonaws.com/articles/wp-content/uploads/2023/03/20174711/Generative-AI.jpg" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs">connect.comptia.org/</p>
                <h5 class="text-base font-bold text-gray-800 mb-4">Generative AI and increased focus on explainable AI and ethical considerations</h5>
                </div>
            </div>
            <div class="bg-gray-100 p-4 mt-4">
                <div class="bg-gray-100 p-4">       
                <img src="https://eu-images.contentstack.com/v3/assets/blt31d6b0704ba96e9d/blt91b45f3fdab97797/63abe78d6b0c2d603c1b7b7d/IoT-security-concept-art.jpg?width=850&auto=webp&quality=95&format=jpg&disable=upscale" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs">google.com</p>
                <h5 class="text-base font-bold text-gray-800 mb-4">Expansion of IoT devices in various industries and increased focus on cybersecurity</h5>
                </div>
            </div>
        </div>
</div>
</div>
@endsection('content')      