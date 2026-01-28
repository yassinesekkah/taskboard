<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TaskBoard') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

<div class="flex min-h-screen bg-gray-100">

    {{-- Sidebar --}}
   <aside
    class="
        hidden md:block
        md:w-64
        lg:w-72
        bg-white
        border-r
        flex-shrink-0
    "
>
    <x-sidebar />
</aside>


    {{-- Main --}}
    <div class="flex-1 flex flex-col">
        <x-navbar />

        <main class="flex-1 p-8 overflow-x-auto">
            {{ $slot }}
        </main>
    </div>

</div>

</body>
</html>

