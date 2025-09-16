@extends('layouts.app')

@section('title', ($notice->title ?? 'Notice').' - AIIMS Deoghar')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <a href="{{ route('notices.index') }}" class="inline-flex items-center text-aiims-red hover:underline mb-6">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5A1 1 0 018.414 4.414L5.121 7.707H17a1 1 0 110 2H5.121l3.293 3.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            Back to Notices
        </a>

        <div class="bg-white rounded shadow p-6">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">{{ $notice->title }}</h1>
                    <div class="mt-2 text-sm text-gray-500">
                        <span class="uppercase tracking-wide">{{ ucfirst($notice->category ?? 'general') }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ optional($notice->notice_date)->format('d M Y') }}</span>
                    </div>
                </div>
            </div>

            @if ($notice->description)
                <div class="prose max-w-none mt-6">
                    {!! nl2br(e($notice->description)) !!}
                </div>
            @endif

            {{-- @if ($notice->file_path)
                <div class="mt-6">
                    <a href="{{ Storage::url($notice->file_path) }}" class="inline-flex items-center px-4 py-2 bg-aiims-red text-white rounded hover:bg-red-700" target="_blank" rel="noopener">
                        Download Attachment
                    </a>
                </div>
            @endif --}}
        </div>
    </div>
@endsection


