@extends('admin.layouts.app')

@section('admin-content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold">Departments</h1>
    <a href="{{ route('admin.departments.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">New Department</a>
    </div>
<div class="bg-white rounded shadow overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">HOD</th>
                <th class="px-4 py-2">Active</th>
                <th class="px-4 py-2">Order</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $department->name }}</td>
                    <td class="px-4 py-2">{{ $department->head_of_department }}</td>
                    <td class="px-4 py-2">{{ $department->is_active ? 'Yes' : 'No' }}</td>
                    <td class="px-4 py-2">{{ $department->sort_order }}</td>
                    <td class="px-4 py-2 text-right space-x-2">
                        <a class="text-blue-600" href="{{ route('admin.departments.edit', $department) }}">Edit</a>
                        <form action="{{ route('admin.departments.destroy', $department) }}" method="post" class="inline" onsubmit="return confirm('Delete this department?')">
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
<div class="mt-4">{{ $departments->withQueryString()->links() }}</div>
@endsection


