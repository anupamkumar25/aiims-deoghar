@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-4">
    <div class="flex items-center justify-between mb-6">
        <div class="text-lg font-semibold">Admin Panel</div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.profile.edit') }}" class="px-3 py-1.5 bg-gray-200 rounded text-sm">Profile</a>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="px-3 py-1.5 bg-aiims-red text-white rounded text-sm">Logout</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
    <aside class="col-span-12 md:col-span-3 lg:col-span-2 bg-white rounded shadow p-4">
        <nav class="space-y-2 text-sm">
            <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Dashboard</a>
            <a href="{{ route('admin.notices.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Notices</a>
            <a href="{{ route('admin.events.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Events</a>
            <a href="{{ route('admin.jobs.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Jobs</a>
            <a href="{{ route('admin.departments.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Departments</a>
            <a href="{{ route('admin.gallery.index') }}" class="block px-3 py-2 hover:bg-gray-100 rounded">Gallery</a>
        </nav>
    </aside>
    <main class="col-span-12 md:col-span-9 lg:col-span-10">
        @if(session('status'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('admin-content')
    </main>
    </div>
</div>
@endsection


