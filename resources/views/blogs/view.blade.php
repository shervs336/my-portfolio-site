@extends('layouts.app')

@section('content')
<div class="flex justify-center" id="showroom">
                <div class="w-full py-12">
                    <div class="container margin:auto mx-auto flex justify-between">
                        <div class="w-full flex flex-col">
                            <div class="flex-1"> 
                               
                                <h1 class="text-5xl font-bold mt-2 text-center">{{$blog->title}}</h1>

                                <p class="mt-4 font-semibold text-gray-800 text-center max-w-1/2 capitalize">Witness the seamless integration of technology and creativity in my showroom</p>

                            </div><!-- Flex 1 -->
                        </div>
                    </div> <!-- Container Block -->
                </div>
            </div>
@endsection('content')      