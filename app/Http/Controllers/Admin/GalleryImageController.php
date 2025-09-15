<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $images = GalleryImage::latest()->paginate(24);
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'image' => ['required','image','max:4096'],
            'caption' => ['nullable','string','max:255'],
        ]);
        $path = $request->file('image')->store('images', 'public');
        GalleryImage::create([
            'path' => $path,
            'caption' => $request->input('caption'),
            'is_active' => true,
        ]);
        return redirect()->route('admin.gallery.index')->with('status', 'Image uploaded');
    }

    public function edit(GalleryImage $gallery)
    {
        $this->authorize('admin');
        return view('admin.gallery.edit', ['image' => $gallery]);
    }

    public function update(Request $request, GalleryImage $gallery)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'image' => ['nullable','image','max:4096'],
            'caption' => ['nullable','string','max:255'],
            'is_active' => ['nullable','boolean'],
        ]);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($gallery->path);
            $gallery->path = $request->file('image')->store('images', 'public');
        }
        $gallery->caption = $request->input('caption');
        $gallery->is_active = (bool) $request->input('is_active', $gallery->is_active);
        $gallery->save();
        return redirect()->route('admin.gallery.index')->with('status', 'Image updated');
    }

    public function destroy(GalleryImage $gallery)
    {
        $this->authorize('admin');
        Storage::disk('public')->delete($gallery->path);
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('status', 'Image deleted');
    }
}


