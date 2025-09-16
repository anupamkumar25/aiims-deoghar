@extends('layouts.app')

@section('title', 'Notices - AIIMS Deoghar')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-aiims-navy mb-6">Notices</h1>

        @if ($notices->isEmpty())
            <div class="bg-white rounded shadow p-6 text-gray-600">No notices available.</div>
        @else
            <div class="grid grid-cols-1 gap-4">
                @foreach ($notices as $notice)
                    <a href="{{ route('notices.show', $notice) }}" class="block bg-white rounded shadow p-5 notice-card">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">{{ $notice->title }}</h2>
                                <div class="mt-1 text-sm text-gray-500">
                                    <span class="uppercase tracking-wide">{{ ucfirst($notice->category ?? 'general') }}</span>
                                    <span class="mx-2">•</span>
                                    <span>{{ optional($notice->notice_date)->format('d M Y') }}</span>
                                </div>
                                @if ($notice->description)
                                    <p class="mt-2 text-gray-700 line-clamp-2">{{ Str::limit(strip_tags($notice->description), 180) }}</p>
                                @endif
                            </div>
                            <svg class="w-6 h-6 text-aiims-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L13.586 10 10.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $notices->links() }}
            </div>
        @endif
    </div>
@endsection


