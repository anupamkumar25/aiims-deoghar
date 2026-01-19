@extends('admin.layouts.app')

@section('admin-content')
    <div class="max-w-3xl">
        <h1 class="text-2xl font-bold mb-6">New ADDA Option</h1>
        <form method="post" action="{{ route('admin.adda-options.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input name="title" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium">URL (optional)</label>
                <input name="url" type="url" class="w-full border rounded px-3 py-2" placeholder="https://example.com">
            </div>
            <div>
                <label class="block text-sm font-medium">Sort Order</label>
                <input name="sort_order" type="number" min="0" value="0" class="w-full border rounded px-3 py-2">
            </div>
            <div class="flex items-center gap-4">
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1" checked> Active</label>
            </div>
            <button class="px-6 py-2 bg-aiims-red text-white rounded">Save</button>
        </form>
    </div>
@endsection


