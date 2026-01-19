@extends('admin.layouts.app')

@section('admin-content')
    <div class="">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">ADDA Options</h1>
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.adda-options.create') }}" class="px-4 py-2 bg-aiims-red text-white rounded">New Option</a>
                <img src="/images/aiims copy.png" alt="" class="h-10">
            </div>
        </div>

        <div class="bg-white rounded shadow overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">URL</th>
                        <th class="px-4 py-2">Order</th>
                        <th class="px-4 py-2">Active</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($options as $option)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $option->title }}</td>
                            <td class="px-4 py-2">{{ $option->url ?? '—' }}</td>
                            <td class="px-4 py-2">{{ $option->sort_order }}</td>
                            <td class="px-4 py-2">{{ $option->is_active ? 'Yes' : 'No' }}</td>
                            <td class="px-4 py-2 text-right space-x-2">
                                <a class="text-blue-600" href="{{ route('admin.adda-options.edit', $option) }}">Edit</a>
                                <form action="{{ route('admin.adda-options.destroy', $option) }}" method="post" class="inline" onsubmit="return confirm('Delete this option?')">
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
        <div class="mt-4">{{ $options->withQueryString()->links() }}</div>
    </div>
@endsection


