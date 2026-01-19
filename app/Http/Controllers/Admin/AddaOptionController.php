<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddaOption;
use Illuminate\Http\Request;

class AddaOptionController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $options = AddaOption::orderBy('sort_order')->paginate(20);
        return view('admin.adda-options.index', compact('options'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.adda-options.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'url', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:100000'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        AddaOption::create([
            'title' => $data['title'],
            'url' => $data['url'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
            'is_active' => (bool) ($data['is_active'] ?? true),
        ]);

        return redirect()->route('admin.adda-options.index')->with('status', 'Option created');
    }

    public function edit(AddaOption $adda_option)
    {
        $this->authorize('admin');
        return view('admin.adda-options.edit', ['option' => $adda_option]);
    }

    public function update(Request $request, AddaOption $adda_option)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'url', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:100000'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $adda_option->update([
            'title' => $data['title'],
            'url' => $data['url'] ?? null,
            'sort_order' => $data['sort_order'] ?? 0,
            'is_active' => (bool) ($data['is_active'] ?? false),
        ]);

        return redirect()->route('admin.adda-options.index')->with('status', 'Option updated');
    }

    public function destroy(AddaOption $adda_option)
    {
        $this->authorize('admin');
        $adda_option->delete();
        return redirect()->route('admin.adda-options.index')->with('status', 'Option deleted');
    }
}


