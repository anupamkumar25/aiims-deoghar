@extends('admin.layouts.app')

@section('admin-content')
    <div class="max-w-3xl">
        <h1 class="text-2xl font-bold mb-6">Edit Notice</h1>
        <form method="post" action="{{ route('admin.notices.update', $notice) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input name="title" value="{{ old('title', $notice->title) }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Category</label>
                <input name="category" value="{{ old('category', $notice->category) }}" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Notice Date</label>
                <input type="date" name="notice_date" value="{{ old('notice_date', optional($notice->notice_date)->format('Y-m-d')) }}" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" rows="6" class="w-full border rounded px-3 py-2">{{ old('description', $notice->description) }}</textarea>
            </div>
            <div class="flex items-center gap-4">
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1" {{ old('is_active', $notice->is_active) ? 'checked' : '' }}> Active</label>
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $notice->is_featured) ? 'checked' : '' }}> Featured</label>
            </div>
            <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
        </form>
    </div>
@endsection

