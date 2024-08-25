<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Custom page scripts stack -->
    @stack('styles')
    @stack('scripts')
</head>

<body>
    <!-- ========== HEADER ========== -->
    <livewire:components.navigation />
    <!-- ========== END HEADER ========== -->
    {{ $slot }}
</body>

</html>
