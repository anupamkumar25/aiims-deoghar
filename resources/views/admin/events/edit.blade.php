@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Edit Event</h1>
<form method="post" action="{{ route('admin.events.update', $event) }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label class="block text-sm font-medium">Title</label>
        <input name="title" value="{{ old('title', $event->title) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Event Date</label>
        <input type="date" name="event_date" value="{{ old('event_date', optional($event->event_date)->format('d-m-Y')) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Event Type</label>
        <input name="event_type" value="{{ old('event_type', $event->event_type) }}" class="w-full border rounded px-3 py-2" />
    </div>
    <div>
        <label class="block text-sm font-medium">Venue</label>
        <input name="venue" value="{{ old('venue', $event->venue) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="6" class="w-full border rounded px-3 py-2">{{ old('description', $event->description) }}</textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="image" accept="image/*">
        @if($event->image_path)
            <div class="mt-2"><img src="{{ Storage::url($event->image_path) }}" class="h-20" alt="Current image"></div>
        @endif
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
</form>
@endsection


