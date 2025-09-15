@extends('layouts.app')

@section('title', 'Departments - AIIMS Deoghar')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Departments</h1>
        <form method="get" class="mb-6">
            <input class="border rounded px-3 py-2 w-full md:w-1/2" type="text" name="q" value="{{ request('q') }}" placeholder="Search departments..." />
        </form>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($departments as $department)
                <a href="{{ route('departments.show', $department) }}" class="block bg-white rounded-lg shadow p-6 hover:shadow-lg">
                    <h3 class="text-lg font-semibold mb-2">{{ $department->name }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit($department->description, 140) }}</p>
                </a>
            @empty
                <p>No departments found.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $departments->withQueryString()->links() }}</div>
    </div>
</section>
@endsection

