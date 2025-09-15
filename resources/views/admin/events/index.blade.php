@extends('admin.layouts.app')

@section('admin-content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Manage Events</h1>
    <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">New Event</a>
    </div>
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Venue</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $event->title }}</td>
                    <td class="px-4 py-2">{{ optional($event->event_date)->format('Y-m-d') }}</td>
                    <td class="px-4 py-2">{{ $event->venue }}</td>
                    <td class="px-4 py-2 text-right space-x-2">
                        <a class="text-blue-600" href="{{ route('admin.events.edit', $event) }}">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event) }}" method="post" class="inline" onsubmit="return confirm('Delete this event?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<div class="mt-4">{{ $events->withQueryString()->links() }}</div>
@endsection


