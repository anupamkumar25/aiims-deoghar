<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('admin');
        $notices = Notice::orderByDesc('notice_date')->paginate(20);
        return view('admin.notices.index', compact('notices'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.notices.create');
    }

    public function edit(Notice $notice)
    {
        $this->authorize('admin');
        return view('admin.notices.edit', compact('notice'));
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['nullable','string'],
            'category' => ['nullable','string','max:100'],
            'notice_date' => ['required','date'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
            'priority' => ['nullable','integer','min:0','max:100'],
        ]);
        // Ensure category never persists as null so DB default or fallback is used
        if (empty($data['category'])) {
            // Unset to allow DB column default('general') to apply on create
            unset($data['category']);
        }
        // Default new notices to active unless explicitly unchecked
        $data['is_active'] = (bool) ($data['is_active'] ?? true);
        $data['is_featured'] = (bool) ($data['is_featured'] ?? false);
        Notice::create($data);
        return redirect()->route('admin.notices.index')->with('status', 'Notice created');
    }

    public function update(Request $request, Notice $notice)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['nullable','string'],
            'category' => ['nullable','string','max:100'],
            'notice_date' => ['required','date'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
            'priority' => ['nullable','integer','min:0','max:100'],
        ]);
        // If category cleared on update, set sensible default
        if (empty($data['category'])) {
            $data['category'] = 'general';
        }
        $data['is_active'] = (bool) ($data['is_active'] ?? false);
        $data['is_featured'] = (bool) ($data['is_featured'] ?? false);
        $notice->update($data);
        return redirect()->route('admin.notices.index')->with('status', 'Notice updated');
    }

    public function destroy(Notice $notice)
    {
        $this->authorize('admin');
        $notice->delete();
        return redirect()->route('admin.notices.index')->with('status', 'Notice deleted');
    }
}


