@extends('layouts.app')

@section('title', 'Contact Us - AIIMS Deoghar')
@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-2xl">
        <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
        @if(session('status'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('status') }}</div>
        @endif
        <form method="post" action="{{ route('contact.store') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="mt-1 w-full border rounded px-3 py-2" required>
                @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full border rounded px-3 py-2" required>
                    @error('email')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="mt-1 w-full border rounded px-3 py-2" required>
                    @error('phone')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium">Subject</label>
                <input type="text" name="subject" value="{{ old('subject') }}" class="mt-1 w-full border rounded px-3 py-2" required>
                @error('subject')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Message</label>
                <textarea name="message" rows="6" class="mt-1 w-full border rounded px-3 py-2" required>{{ old('message') }}</textarea>
                @error('message')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <button type="submit" class="px-6 py-2 bg-aiims-red text-white rounded">Send Message</button>
        </form>
    </div>
</section>
@endsection

