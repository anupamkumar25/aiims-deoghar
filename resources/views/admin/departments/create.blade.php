@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Create Department</h1>
<form method="post" action="{{ route('admin.departments.store') }}" enctype="multipart/form-data" class="space-y-4 max-w-3xl">
    @csrf
    <div>
        <label class="block text-sm font-medium">Name</label>
        <input name="name" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Head of Department</label>
        <input name="head_of_department" class="w-full border rounded px-3 py-2">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-sm font-medium">Phone</label>
            <input name="phone" class="w-full border rounded px-3 py-2">
        </div>
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="5" class="w-full border rounded px-3 py-2"></textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Services</label>
        <textarea name="services" rows="4" class="w-full border rounded px-3 py-2"></textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium">Sort Order</label>
            <input type="number" name="sort_order" class="w-full border rounded px-3 py-2" min="0" value="0">
        </div>
        <div class="flex items-end">
            <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1" checked> Active</label>
        </div>
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Save</button>
</form>
@endsection


