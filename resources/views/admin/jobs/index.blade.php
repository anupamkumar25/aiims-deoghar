@extends('admin.layouts.app')

@section('admin-content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Manage Jobs</h1>
    <a href="{{ route('admin.jobs.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">New Job</a>
    </div>
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Last Date</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $job->title }}</td>
                    <td class="px-4 py-2">{{ optional($job->application_end_date)->format('Y-m-d') }}</td>
                    <td class="px-4 py-2 text-right space-x-2">
                        <a class="text-blue-600" href="{{ route('admin.jobs.edit', $job) }}">Edit</a>
                        <form action="{{ route('admin.jobs.destroy', $job) }}" method="post" class="inline" onsubmit="return confirm('Delete this job?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<div class="mt-4">{{ $jobs->withQueryString()->links() }}</div>
@endsection


