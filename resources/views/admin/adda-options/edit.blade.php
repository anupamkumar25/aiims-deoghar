@extends('admin.layouts.app')

@section('admin-content')
    <div class="max-w-3xl">
        <h1 class="text-2xl font-bold mb-6">Edit ADDA Option</h1>
        <form method="post" action="{{ route('admin.adda-options.update', $option) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input name="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $option->title) }}" required>
            </div>
            <div>
                <label class="block text-sm font-medium">URL (optional)</label>
                <input name="url" type="url" class="w-full border rounded px-3 py-2" value="{{ old('url', $option->url) }}" placeholder="https://example.com">
            </div>
            <div>
                <label class="block text-sm font-medium">Sort Order</label>
                <input name="sort_order" type="number" min="0" class="w-full border rounded px-3 py-2" value="{{ old('sort_order', $option->sort_order) }}">
            </div>
            <div class="flex items-center gap-4">
                <label class="inline-flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $option->is_active) ? 'checked' : '' }}> Active
                </label>
            </div>
            <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
        </form>
    </div>
@endsection


