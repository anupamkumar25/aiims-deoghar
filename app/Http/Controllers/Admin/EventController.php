<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        // $events = Event::orderByDesc('event_date')->paginate(20);
        $events = Event::orderByDesc('event_date')->paginate(5)->withQueryString();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'event_date' => ['required','date'],
            'venue' => ['required','string','max:255'],
            'image' => ['nullable','image','max:2048'],
            'event_type' => ['nullable','string','max:50'],
        ]);
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        $data['is_active'] = true;
        $data['event_type'] = $data['event_type'] ?? 'general';
        Event::create($data);
        return redirect()->route('admin.events.index')->with('status', 'Event created');
    }

    public function edit(Event $event)
    {
        $this->authorize('admin');
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['nullable','string'],
            'event_date' => ['required','date'],
            'venue' => ['nullable','string','max:255'],
            'image' => ['nullable','image','max:2048'],
            'event_type' => ['nullable','string','max:50'],
        ]);
        if ($request->hasFile('image')) {
            if ($event->image_path) {
                Storage::disk('public')->delete($event->image_path);
            }
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        $data['event_type'] = $data['event_type'] ?? ($event->event_type ?: 'general');
        $event->update($data);
        return redirect()->route('admin.events.index')->with('status', 'Event updated');
    }

    public function destroy(Event $event)
    {
        $this->authorize('admin');
        if ($event->image_path) {
            Storage::disk('public')->delete($event->image_path);
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with('status', 'Event deleted');
    }
}


