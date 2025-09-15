@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Admin Login</h1>
    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            {{ $errors->first() }}
        </div>
    @endif
    <form method="post" action="{{ route('admin.login.attempt') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required autofocus>
        </div>
        <div>
            <label class="block text-sm font-medium">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="flex items-center justify-between">
            <label class="inline-flex items-center gap-2 text-sm"><input type="checkbox" name="remember" value="1"> Remember me</label>
            <a href="{{ route('password.request') }}" class="text-sm text-blue-600">Forgot password?</a>
        </div>
        <button class="w-full px-6 py-2 bg-aiims-red text-white rounded">Login</button>
    </form>
</div>
@endsection


