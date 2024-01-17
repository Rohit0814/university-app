<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 bg-gray-100 antialiased">
        <div class="w-[99.99%] flex max-[600px]:justify-center sticky top-0" style="background:#11235A">
            <a href="/" class="pt-3 pb-3"><span class="text-white w-full m-2 px-20 text-3xl min-[823px]:text-left font-bold max-[405px]:text-xl cursor-pointer" style="font-family: 'Roboto', sans-serif;">College Authority</span></a>
        </div>
        <div class="flex items-center ml-3 mr-3 h-[92vh]  sm:justify-center  pt-6 sm:pt-0">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
