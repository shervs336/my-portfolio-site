@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen py-12 bg-blue-50 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-3">Dashboard</h1>

           
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-x-4 gap-y-2">
            <!-- Card 1-->
            <div class="w-full">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex items-center">
                    <div class="grow">
                        <small class="leading-relaxed text-gray-400">Blog Visits</small>
                        <div class="font-medium text-2xl text-gray-700">2.7K</div>
                    </div>
                    <div class="bg-sky-500 py-3 px-4 rounded-md shadow-md">
                        <i class="fa-solid fa-blog text-white"></i>
                    </div>
                </div>
            </div>

            <!-- Card 2-->
            <div class="w-full">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex items-center">
                    <div class="grow">
                        <small class="leading-relaxed text-gray-400">Total Page Visits</small>
                        <div class="font-medium text-2xl text-gray-700">99</div>
                    </div>
                    <div class="bg-sky-500 py-3 px-4 rounded-md shadow-md">
                        <i class="fa-regular fa-newspaper text-white"></i>
                    </div>
                </div>
            </div>

            <!-- Card 3-->
            <div class="w-full">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex items-center">
                    <div class="grow">
                        <small class="leading-relaxed text-gray-400">Newsletter Subscription</small>
                        <div class="font-medium text-2xl text-gray-700">99</div>
                    </div>
                    <div class="bg-sky-500 py-3 px-4 rounded-md shadow-md">
                        <i class="fa-regular fa-envelope text-white"></i>
                    </div>
                </div>
            </div>

            <!-- Card 4-->
            <div class="w-full">
                <div class="border-2 border-blue-500 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex items-center">
                    <div class="grow">
                        <small class="leading-relaxed text-gray-400">Contacts Received</small>
                        <div class="font-medium text-2xl text-gray-700">99</div>
                    </div>
                    <div class="bg-sky-500 py-3 px-4 rounded-md shadow-md">
                        <i class="fa-solid fa-phone text-white"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
