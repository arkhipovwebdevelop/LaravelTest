<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include necessary assets -->
</head>
<body>
<div id="app">
    @include('layouts.navigation') <!-- Optional, include if you have a navigation bar -->

    <main>
        @yield('content') <!-- This renders the content from child views like admin.blade.php -->
    </main>
</div>
</body>
</html>

