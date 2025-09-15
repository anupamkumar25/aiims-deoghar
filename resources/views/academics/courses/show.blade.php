@extends('layouts.app')

@section('title', $course->name.' - Course')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <a href="{{ route('academics.courses') }}" class="text-blue-600">← Back to Courses</a>
        <div class="text-sm text-gray-500 mt-2">Code: {{ $course->code }} @if($course->level) • Level: {{ $course->level }} @endif</div>
        <h1 class="text-3xl font-bold mt-2">{{ $course->name }}</h1>
        <div class="prose mt-6">{!! nl2br(e($course->description)) !!}</div>
        @if($course->curriculum)
            <div class="prose mt-6">
                <h2 class="text-xl font-semibold">Curriculum</h2>
                {!! nl2br(e($course->curriculum)) !!}
            </div>
        @endif
    </div>
</section>
@endsection

