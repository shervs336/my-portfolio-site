@extends('admin.layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen py-12 bg-blue-50 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold mb-3">Categories</h1>
        @livewire('admin.category')
    </div>
@endsection
