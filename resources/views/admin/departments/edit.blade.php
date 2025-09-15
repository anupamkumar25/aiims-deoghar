@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Edit Department</h1>
<form method="post" action="{{ route('admin.departments.update', $department) }}" enctype="multipart/form-data" class="space-y-4 max-w-3xl">
    @csrf
    @method('PUT')
    <div>
        <label class="block text-sm font-medium">Name</label>
        <input name="name" value="{{ old('name', $department->name) }}" class="w-full border rounded px-3 py-2" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Head of Department</label>
        <input name="head_of_department" value="{{ old('head_of_department', $department->head_of_department) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', $department->email) }}" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-sm font-medium">Phone</label>
            <input name="phone" value="{{ old('phone', $department->phone) }}" class="w-full border rounded px-3 py-2">
        </div>
    </div>
    <div>
        <label class="block text-sm font-medium">Description</label>
        <textarea name="description" rows="5" class="w-full border rounded px-3 py-2">{{ old('description', $department->description) }}</textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Services</label>
        <textarea name="services" rows="4" class="w-full border rounded px-3 py-2">{{ old('services', $department->services) }}</textarea>
    </div>
    <div>
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="image" accept="image/*">
        @if($department->image_path)
            <div class="mt-2"><img src="{{ Storage::url($department->image_path) }}" class="h-20" alt="Current"></div>
        @endif
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium">Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $department->sort_order) }}" class="w-full border rounded px-3 py-2" min="0">
        </div>
        <div class="flex items-end">
            <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1" {{ $department->is_active ? 'checked' : '' }}> Active</label>
        </div>
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
    </form>
@endsection


