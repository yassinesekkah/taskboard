<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TaskBoard') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div x-data="{
        sidebarOpen: false,
        openCreate: {{ $errors->any() ? 'true' : 'false' }} }"
        class="flex min-h-screen bg-gray-100">



        <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-black/40 z-30 md:hidden"
            @click="sidebarOpen = false"></div>

        <!-- Sidebar -->
        <aside
            class=" 
                    fixed 
                    h-screen
                    inset-y-0 left-0
                    z-40
                    w-64
                    md:w-52
                    lg:w-64
                    bg-white
                    border-r
                    flex-shrink-0
                    transform
                    transition-transform
                    duration-300
                    -translate-x-full
                    md:translate-x-0
                "
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            <x-sidebar />
        </aside>

        {{-- Main --}}
        <div class="flex-1 flex flex-col ml-72 md:ml-64">
            <x-navbar />

            <main class="flex-1 p-8 overflow-x-auto">
                {{ $slot }}
            </main>

            {{-- Toast --}}
            <x-toast />
        </div>
        {{-- Modal --}}
        <x-create-task-modal />

    </div>

</body>

</html>
