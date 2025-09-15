@extends('layouts.app')

@section('title', 'Procurements - AIIMS Deoghar')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Procurements</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($procurements as $procurement)
                <a href="{{ route('procurement.show', $procurement) }}" class="block bg-white rounded-lg shadow p-6 hover:shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs px-2 py-0.5 rounded bg-blue-100 text-blue-700">{{ $procurement->type }}</span>
                        <span class="text-sm text-gray-500">Closes {{ $procurement->closing_date?->format('M d, Y') }}</span>
                    </div>
                    <h3 class="text-lg font-semibold">{{ $procurement->title }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ Str::limit($procurement->description, 120) }}</p>
                </a>
            @empty
                <p>No procurements found.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $procurements->withQueryString()->links() }}</div>
    </div>
</section>
@endsection

