@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="bg-white rounded shadow p-4"><div class="text-sm text-gray-500">Notices</div><div class="text-3xl font-bold">{{ $stats['notices'] }}</div></div>
    <div class="bg-white rounded shadow p-4"><div class="text-sm text-gray-500">Events</div><div class="text-3xl font-bold">{{ $stats['events'] }}</div></div>
    <div class="bg-white rounded shadow p-4"><div class="text-sm text-gray-500">Jobs</div><div class="text-3xl font-bold">{{ $stats['jobs'] }}</div></div>
    <div class="bg-white rounded shadow p-4"><div class="text-sm text-gray-500">Gallery Images</div><div class="text-3xl font-bold">{{ $stats['images'] }}</div></div>
    </div>
@endsection


