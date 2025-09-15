@extends('admin.layouts.app')

@section('admin-content')
<h1 class="text-2xl font-bold mb-6">My Profile</h1>
<div class="max-w-xl">
    <form method="post" action="{{ route('admin.profile.update') }}" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium">Name</label>
            <input value="{{ $user->name }}" class="w-full border rounded px-3 py-2" disabled>
        </div>
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input value="{{ $user->email }}" class="w-full border rounded px-3 py-2" disabled>
        </div>
        <div>
            <label class="block text-sm font-medium">Current Password</label>
            <input type="password" name="current_password" class="w-full border rounded px-3 py-2" required>
            @error('current_password')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">New Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            @error('password')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
        </div>
        <button class="px-6 py-2 bg-aiims-red text-white rounded">Update Password</button>
    </form>
</div>
@endsection


