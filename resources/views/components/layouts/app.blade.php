<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Authentication' }} - ChineseCourse</title>
        
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-white dark:bg-black min-h-screen">
        <livewire:navbar />
        {{ $slot }}
        <livewire:footer />
        
        @livewireScripts
        @vite('resources/js/app.js')
    </body>
</html>