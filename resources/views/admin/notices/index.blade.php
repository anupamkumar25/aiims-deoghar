@extends('admin.layouts.app')

@section('admin-content')
    <div class="">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Manage Notices</h1>
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.notices.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">New Notice</a>
                <img src="/images/aiims copy.png" alt="" class="h-10">
            </div>
    </div>

        <div class="bg-white rounded shadow overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Active</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notices as $notice)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $notice->title }}</td>
                            <td class="px-4 py-2">{{ $notice->category }}</td>
                            <td class="px-4 py-2">{{ optional($notice->notice_date)->format('d-m-Y') }}</td>
                            <td class="px-4 py-2">{{ $notice->is_active ? 'Yes' : 'No' }}</td>
                            <td class="px-4 py-2 text-right space-x-2">
                                <a class="text-blue-600" href="{{ route('admin.notices.edit', $notice) }}">Edit</a>
                                <form action="{{ route('admin.notices.destroy', $notice) }}" method="post" class="inline" onsubmit="return confirm('Delete this notice?')">
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
        <div class="mt-4">{{ $notices->withQueryString()->links() }}</div>
    </div>
@endsection

