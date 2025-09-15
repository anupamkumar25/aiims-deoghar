@extends('admin.layouts.app')

@section('admin-content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Image Gallery</h1>
    <a href="{{ route('admin.gallery.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">Upload Image</a>
    </div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
    @foreach($images as $image)
        <div class="bg-white rounded shadow p-2">
            <img class="w-full h-32 object-cover rounded" src="{{ Storage::url($image->path) }}" alt="{{ $image->caption }}">
            <div class="mt-2 text-sm">{{ $image->caption }}</div>
            <div class="mt-2 flex justify-between text-xs">
                <a class="text-blue-600" href="{{ route('admin.gallery.edit', $image) }}">Edit</a>
                <form action="{{ route('admin.gallery.destroy', $image) }}" method="post" onsubmit="return confirm('Delete this image?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
<div class="mt-4">{{ $images->withQueryString()->links() }}</div>
@endsection


