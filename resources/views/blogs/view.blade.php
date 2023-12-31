@extends('layouts.app')

@section('content')

<div class="flex flex-col">
    <div class="bg-slate-50 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{$blog->title}}</h1>
            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-normal text-sm text-blue-600 hover:bg-gray-100">Sherwin Rhey Condez</a>
            <time datetime="2023" class="text-gray-500 text-sm">Nov. 8, 2023</time>
        </div>
    </div>
    <br>
    <a href="#" class="text-blue-700 hover:text-indigo-600 text-right mr-6 pt-6">View all Posts ></a>

    <div class="bg-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row">
            <div class="w-full md:w-3/4 px-4">
                <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-15-pro-finish-select-202309-6-1inch?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1693009278906" alt="Blog Featured Image" class="mb-8">
                <div class="prose max-w-none">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                    <p class="text-2xl font-bold mt-2 text-center">Super Retina XDR display</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    
                </div>
            </div>
            
            <div class="w-full md:w-1/4 px-4">
                <div class="bg-gray-100 p-4">       
                <img src="https://content.fortune.com/wp-content/uploads/2023/07/GettyImages-1550763049-e1690219517337.jpg" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs">X.com</p>
                <h5 class="text-base font-bold text-gray-800 mb-4">Musk wants to charge all X users</h5>
                </div>
            <div class="bg-gray-100 p-4 mt-4">
                <div class="bg-gray-100 p-4">       
                <img src="https://s40424.pcdn.co/in/wp-content/uploads/2022/03/What-is-Information-Technology-1.jpg.optimal.jpg" alt="Blog Featured Image" class="mb-6">
                <p class="text-gray-500 text-xs">google.com</p>
                <h5 class="text-base font-bold text-gray-800 mb-4">IT firms utilization rates rise as demand slows down</h5>
                </div>
            </div>
           
        </div>

    </div>
</div>

@endsection('content')      