<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Validation\Rule;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Notice::active()->orderByDesc('notice_date');
        
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }
        
        $notices = $query->paginate(10);
        
        return view('notices.index', compact('notices'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        return view('notices.show', compact('notice'));
    }

    // Admin create
    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'category' => ['required','string','max:100'],
            'notice_date' => ['required','date'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
            'priority' => ['nullable','integer','min:0','max:100'],
        ]);
        $data['is_active'] = (bool) ($data['is_active'] ?? false);
        $data['is_featured'] = (bool) ($data['is_featured'] ?? false);
        Notice::create($data);
        return redirect()->route('admin.notices.index')->with('status', 'Notice created');
    }

    // Admin update
    public function update(Request $request, Notice $notice)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'category' => ['required','string','max:100'],
            'notice_date' => ['required','date'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
            'priority' => ['nullable','integer','min:0','max:100'],
        ]);
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
