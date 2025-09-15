@extends('layouts.app')

@section('title', $job->title.' - Job')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <a href="{{ route('jobs.index') }}" class="text-blue-600">← Back to Jobs</a>
        <h1 class="text-3xl font-bold mt-4">{{ $job->title }}</h1>
        <div class="text-sm text-gray-600 mt-2">Department: {{ $job->department }} • Apply by {{ $job->application_end_date->format('M d, Y') }}</div>
        <div class="prose mt-6">{!! nl2br(e($job->description)) !!}</div>
        @if($job->file_path)
            <a class="inline-block mt-6 px-4 py-2 bg-aiims-red text-white rounded" href="{{ Storage::url($job->file_path) }}" target="_blank">Download Notification</a>
        @endif
    </div>
</section>
@endsection

