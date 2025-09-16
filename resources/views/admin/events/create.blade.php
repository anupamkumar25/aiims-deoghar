@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Create Event</h1>
<form method="post" action="{{ route('admin.events.store') }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium">Title</label>
        <input name="title" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Event Date</label>
        <input type="date" name="event_date" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Event Type</label>
        <input name="event_type" class="w-full border rounded px-3 py-2" placeholder="seminar / workshop / cme" required/>
    </div>
    <div>
        <label class="block text-sm font-medium">Venue</label>
        <input name="venue" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="6" class="w-full border rounded px-3 py-2" required></textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Save</button>
</form>
@endsection


