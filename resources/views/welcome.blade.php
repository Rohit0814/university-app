<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="h-screen">


    @if (Route::has('faculty.dashboard'))
        @auth('faculty')
            <x-faculty-layout>
                <x-home-layout />
            </x-faculty-layout>
        @elseif (Route::has('admin.dashboard'))
            @auth('admin')
                <x-admin-layout>
                    <x-home-layout />
                </x-admin-layout>
            @elseif (Route::has('student.dashboard'))
                @auth('student')
                    <x-student-layout>
                        <x-home-layout />
                    </x-student-layout>
                @else
                    <x-app-layout>
                        <x-home-layout />
                    </x-app-layout>
                @endauth
            @endauth
        @endauth
    @endif
</body>

</html>
