@extends('layouts.app')

@section('title', 'Events - AIIMS Deoghar')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Events</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($events as $event)
                <a href="{{ route('events.show', $event) }}" class="block bg-white rounded-lg shadow p-6 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs px-2 py-0.5 rounded bg-green-100 text-green-700">{{ $event->event_type }}</span>
                        <span class="text-sm text-gray-500">{{ $event->event_date->format('M d, Y') }}</span>
                    </div>
                    <h3 class="text-lg font-semibold">{{ $event->title }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ Str::limit($event->description, 120) }}</p>
                </a>
            @empty
                <p>No events found.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $events->withQueryString()->links() }}</div>
    </div>
    </section>
@endsection

