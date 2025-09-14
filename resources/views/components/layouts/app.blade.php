<!-- <x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AIIMS Deoghar Clone</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
