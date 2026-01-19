@extends('layouts.app')

@section('title', 'ADDA - AIIMS Deoghar')
@section('description', 'Explore ADDA updates and information from AIIMS Deoghar.')

@section('content')
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">ADDA AIIMS Deoghar</h1>
            <p class="text-gray-700 leading-relaxed mb-8">
                Quick access to ADDA items.
            </p>

            @if(isset($options) && $options->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($options as $option)
                        <a href="{{ $option->url ?? '#' }}" target="{{ $option->url ? '_blank' : '_self' }}"
                           class="block bg-gray-50 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                            <div class="flex flex-col items-center justify-between h-56 px-6 py-6 space-y-4 text-center">
                                <div class="flex-1 flex items-center">
                                    <span class="text-xl font-semibold text-indigo-900">{{ $option->title }}</span>
                                </div>
                                <span class="text-sm text-blue-600 underline">Open</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="p-6 bg-gray-50 border rounded">No options yet. Add some from the admin panel.</div>
            @endif
        </div>
    </section>
@endsection

