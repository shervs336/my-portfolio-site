@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen py-12 bg-blue-50 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-3">Dashboard</h1>

           
        <div class="flex flex-wrap justify-center">
            <!-- Card 1-->
            <div class="p-4 w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center">
                    <i class="fa-regular fa-newspaper text-sky-500 text-7xl"></i>
                    <h2 class="title-font font-medium text-3xl text-gray-400">2.7K</h2>
                    <p class="leading-relaxed text-gray-700">Blog Visits</p>
                </div>
            </div>

            <!-- Card 2-->
            <div class="p-4 w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center">
                    <i class="fa-solid fa-pager text-sky-500 text-7xl"></i>
                    <h2 class="title-font font-medium text-3xl text-gray-400">99</h2>
                    <p class="leading-relaxed text-gray-700">Total Page Visits</p>    
                </div>
            </div>

            <!-- Card 3-->
            <div class="p-4 w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center">
                    <i class="fa-regular fa-envelope text-sky-500 text-7xl"></i>
                    <h2 class="title-font font-medium text-3xl text-gray-400">74</h2>
                    <p class="leading-relaxed text-gray-700">Newsletter Subscription</p>
                </div>
            </div>

            <!-- Card 4-->
            <div class="p-4 w-full sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/4">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center">
                    <i class="fa-solid fa-phone text-sky-500 text-7xl"></i>
                    <h2 class="title-font font-medium text-3xl text-gray-400">46</h2>
                    <p class="leading-relaxed text-gray-700">Contacts Received</p>
                </div>
            </div>
        </div>

    </div>
@endsection
