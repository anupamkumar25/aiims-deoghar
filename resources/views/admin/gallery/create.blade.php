@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">Upload Image</h1>
<form method="post" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium">Image</label>
        <input type="file" name="image" accept="image/*" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Caption</label>
        <input name="caption" class="w-full border rounded px-3 py-2">
    </div>
    <button class="px-6 py-2 bg-aiims-red text-white rounded">Upload</button>
</form>
@endsection


