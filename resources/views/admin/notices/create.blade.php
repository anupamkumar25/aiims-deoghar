@extends('admin.layouts.app')

@section('admin-content')
    <div class="max-w-3xl">
        <h1 class="text-2xl font-bold mb-6">Create Notice</h1>
        <form method="post" action="{{ route('admin.notices.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Title</label>
                <input name="title" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Category</label>
                <input name="category" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium">Notice Date</label>
                <input type="date" name="notice_date" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" rows="6" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <div class="flex items-center gap-4">
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1"> Active</label>
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_featured" value="1"> Featured</label>
            </div>
            <button class="px-6 py-2 bg-aiims-red text-white rounded">Save</button>
        </form>
    </div>
@endsection

