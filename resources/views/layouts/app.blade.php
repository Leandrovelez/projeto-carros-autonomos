<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-base-200/50 dark:bg-slate-950">
        {{-- NAVBAR mobile only --}}
        <x-mary-nav sticky class="lg:hidden">
            <x-slot:actions>
                <label for="main-drawer" class="lg:hidden me-3 cursor-pointer float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>                      
                </label>
                <img src="" alt="" class="h-12">
            </x-slot:actions>
            <x-mary-theme-toggle class="btn btn-circle" />
        </x-mary-nav>

        {{-- MAIN --}}
        <x-mary-main full-width class="">
            {{-- SIDEBAR --}}
            <livewire:navbar />
            

            {{-- The `$slot` goes here --}}
            <x-slot:content class="px-0 ps-0 ms-0">
                {{ $slot }}
            </x-slot:content>
        </x-mary-main>

        {{--  TOAST area --}}
        <x-mary-toast />

        @stack('modals')

        @livewireScripts
    </body>
</html>
