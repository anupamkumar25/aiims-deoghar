@extends('layouts.app')

@section('title', $department->name.' - Department')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <a href="{{ route('departments.index') }}" class="text-blue-600">← Back to Departments</a>
        <h1 class="text-3xl font-bold mt-4">{{ $department->name }}</h1>
        @if($department->head_of_department)
            <div class="text-sm text-gray-600 mt-2">Head: {{ $department->head_of_department }}</div>
        @endif
        <div class="prose mt-6">{!! nl2br(e($department->description)) !!}</div>
        @if($department->image_path)
            <img src="{{ Storage::url($department->image_path) }}" alt="{{ $department->name }}" class="mt-6 rounded" />
        @endif
    </div>
</section>
@endsection

