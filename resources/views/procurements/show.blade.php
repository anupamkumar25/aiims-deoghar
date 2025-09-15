@extends('layouts.app')

@section('title', $procurement->title.' - Procurement')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <a href="{{ route('procurement.index') }}" class="text-blue-600">← Back to Procurements</a>
        <h1 class="text-3xl font-bold mt-4">{{ $procurement->title }}</h1>
        <div class="text-sm text-gray-600 mt-2">Ref: {{ $procurement->reference_number }} @if($procurement->closing_date) • Closes {{ $procurement->closing_date->format('M d, Y') }} @endif</div>
        <div class="prose mt-6">{!! nl2br(e($procurement->description)) !!}</div>
        @if($procurement->file_path)
            <a class="inline-block mt-6 px-4 py-2 bg-aiims-red text-white rounded" href="{{ Storage::url($procurement->file_path) }}" target="_blank">Download Document</a>
        @endif
    </div>
</section>
@endsection

