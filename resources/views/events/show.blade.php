@extends('layouts.app')

@section('title', $event->title.' - Event')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <a href="{{ route('events.index') }}" class="text-blue-600">← Back to Events</a>
        <h1 class="text-3xl font-bold mt-4">{{ $event->title }}</h1>
        <div class="text-sm text-gray-600 mt-2">{{ $event->event_date->format('M d, Y') }} @if($event->venue) • {{ $event->venue }} @endif</div>
        <div class="prose mt-6">{!! nl2br(e($event->description)) !!}</div>
        @if($event->image_path)
            <img src="{{ asset('storage/'.$event->image_path) }}" alt="{{ $event->title }}" class="mt-6 rounded" />
        @endif
    </div>
</section>
@endsection

