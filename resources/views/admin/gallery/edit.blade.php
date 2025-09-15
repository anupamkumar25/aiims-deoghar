@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Edit Image</h1>
<form method="post" action="{{ route('admin.gallery.update', $image) }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <img class="h-32 rounded" src="{{ Storage::url($image->path) }}" alt="Current">
    </div>
    <div>
        <label class="block text-sm font-medium">Replace Image</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <div>
        <label class="block text-sm font-medium">Caption</label>
        <input name="caption" value="{{ old('caption', $image->caption) }}" class="w-full border rounded px-3 py-2">
    </div>
    <div>
        <label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" value="1" {{ $image->is_active ? 'checked' : '' }}> Active</label>
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Update</button>
</form>
@endsection


