@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold hover:text-blue-500 mb-3">Blogs</h1>
        @livewire('admin.blog')
    </div>
@endsection
