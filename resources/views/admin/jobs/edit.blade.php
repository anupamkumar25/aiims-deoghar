@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Edit Job</h1>
<form method="post" action="{{ route('admin.jobs.update', $job) }}" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label class="block text-sm font-medium">Title</label>
        <input name="title" value="{{ old('title', $job->title) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Last Date</label>
        <input type="date" name="application_end_date" value="{{ old('application_end_date', optional($job->application_end_date)->format('Y-m-d')) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Start Date</label>
        <input type="date" name="application_start_date" value="{{ old('application_start_date', optional($job->application_start_date)->format('Y-m-d')) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium">Position Type</label>
        <input name="position_type" value="{{ old('position_type', $job->position_type) }}" class="w-full border rounded px-3 py-2" required/>
    </div>
    <div>
        <label class="block text-sm font-medium">Requirements</label>
        <textarea name="qualification" rows="5" class="w-full border rounded px-3 py-2">{{ old('qualification', $job->qualification) }}</textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="6" class="w-full border rounded px-3 py-2">{{ old('description', $job->description) }}</textarea>
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
</form>
@endsection


