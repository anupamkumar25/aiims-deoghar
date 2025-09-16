@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Create Job</h1>
<form method="post" action="{{ route('admin.jobs.store') }}" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium">Title</label>
        <input name="title" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Last Date</label>
        <input type="date" name="application_end_date" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Start Date</label>
        <input type="date" name="application_start_date" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="block text-sm font-medium">Position Type</label>
        <input name="position_type" class="w-full border rounded px-3 py-2" placeholder="faculty / non-faculty / contract" required/>
    </div>
    <div>
        <label class="block text-sm font-medium">Requirements</label>
        <textarea name="qualification" rows="5" class="w-full border rounded px-3 py-2" required></textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="6" class="w-full border rounded px-3 py-2" required></textarea>
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Save</button>
</form>
@endsection


