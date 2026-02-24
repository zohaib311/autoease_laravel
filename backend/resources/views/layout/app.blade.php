<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        [wire\\:navigate] {
            transition: opacity 0.3s ease;
        }
    </style>
</head>

<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    @yield('scripts')
    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
