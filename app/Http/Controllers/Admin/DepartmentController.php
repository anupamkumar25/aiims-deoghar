<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $departments = Department::orderBy('sort_order')->paginate(20);
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => ['required','string'],
            'head_of_department' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['required','string','max:50'],
            'services' => ['required','string'],
            'image' => ['nullable','image','max:4096'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable','boolean'],
        ]);

        $slugBase = Str::slug($data['name']);
        $slug = $slugBase;
        $counter = 1;
        while (Department::where('slug', $slug)->exists()) {
            $slug = $slugBase.'-'.$counter++;
        }
        $data['slug'] = $slug;
        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        $data['is_active'] = (bool) ($data['is_active'] ?? true);

        Department::create($data);
        return redirect()->route('admin.departments.index')->with('status', 'Department created');
    }

    public function edit(Department $department)
    {
        $this->authorize('admin');
        return view('admin.departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'description' => ['nullable','string'],
            'head_of_department' => ['nullable','string','max:255'],
            'email' => ['nullable','email','max:255'],
            'phone' => ['nullable','string','max:50'],
            'services' => ['nullable','string'],
            'image' => ['nullable','image','max:4096'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable','boolean'],
        ]);

        if ($department->name !== $data['name']) {
            $slugBase = Str::slug($data['name']);
            $slug = $slugBase;
            $counter = 1;
            while (Department::where('slug', $slug)->where('id', '!=', $department->id)->exists()) {
                $slug = $slugBase.'-'.$counter++;
            }
            $data['slug'] = $slug;
        }

        if ($request->hasFile('image')) {
            if ($department->image_path) {
                Storage::disk('public')->delete($department->image_path);
            }
            $data['image_path'] = $request->file('image')->store('images', 'public');
        }
        $data['is_active'] = (bool) ($data['is_active'] ?? $department->is_active);

        $department->update($data);
        return redirect()->route('admin.departments.index')->with('status', 'Department updated');
    }

    public function destroy(Department $department)
    {
        $this->authorize('admin');
        if ($department->image_path) {
            Storage::disk('public')->delete($department->image_path);
        }
        $department->delete();
        return redirect()->route('admin.departments.index')->with('status', 'Department deleted');
    }
}


