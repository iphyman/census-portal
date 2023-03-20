<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Census Portal') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @notifyCss
</head>

<body class="npc-body">
    @include('layouts.navigation')
    <div class="w-100 h-100 d-flex gap-4">
        @include('layouts.sidebar')
        <div class="w-100 d-flex flex-column">
            <div class="container">
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <x:notify-messages />
    @notifyJs
    @include('layouts.footer')
    @stack('scripts')
</body>

</html>