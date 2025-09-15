@extends('layouts.app')

@section('title', 'Courses - AIIMS Deoghar')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Courses</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($courses as $course)
                <a href="{{ route('academics.courses.show', $course) }}" class="block bg-white rounded-lg shadow p-6 hover:shadow-lg">
                    <div class="text-sm text-gray-500 mb-1">{{ $course->code }}</div>
                    <h3 class="text-lg font-semibold">{{ $course->name }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ Str::limit($course->description, 120) }}</p>
                </a>
            @empty
                <p>No courses found.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $courses->withQueryString()->links() }}</div>
    </div>
</section>
@endsection

