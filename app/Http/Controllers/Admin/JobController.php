<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $jobs = JobPosting::orderByDesc('application_end_date')->paginate(5)->withQueryString();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $this->authorize('admin');
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'qualification' => ['required','string'],
            'experience' => ['required','string'],
            'application_start_date' => ['nullable','date'],
            'application_end_date' => ['required','date'],
            'position_type' => ['required','string','max:100'],
        ]);
        $data['is_active'] = true;
        $data['position_type'] = $data['position_type'] ?? 'general';
        $data['application_start_date'] = $data['application_start_date'] ?? now()->toDateString();
        JobPosting::create($data);
        return redirect()->route('admin.jobs.index')->with('status', 'Job created');
    }

    public function edit(JobPosting $job)
    {
        $this->authorize('admin');
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, JobPosting $job)
    {
        $this->authorize('admin');
        $data = $request->validate([
            'title' => ['required','string','max:255'],
            'description' => ['nullable','string'],
            'qualification' => ['nullable','string'],
            'experience' => ['nullable','string'],
            'application_start_date' => ['nullable','date'],
            'application_end_date' => ['required','date'],
            'position_type' => ['nullable','string','max:100'],
        ]);
        $data['position_type'] = $data['position_type'] ?? ($job->position_type ?: 'general');
        $data['application_start_date'] = $data['application_start_date'] ?? ($job->application_start_date?->toDateString() ?? now()->toDateString());
        $job->update($data);
        return redirect()->route('admin.jobs.index')->with('status', 'Job updated');
    }

    public function destroy(JobPosting $job)
    {
        $this->authorize('admin');
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('status', 'Job deleted');
    }
}


