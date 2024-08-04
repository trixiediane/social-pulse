<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fontawesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>{{ $title ?? 'Burst Notification' }}</title>

    <!-- Custom page scripts stack -->
    @stack('styles')
    @stack('scripts')
</head>

<body>
    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>
</body>

</html>
