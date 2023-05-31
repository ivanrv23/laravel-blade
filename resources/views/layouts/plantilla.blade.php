<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tituloPagina')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex flex-col h-screen">
        {{-- header --}}
        @yield('header')
        {{-- Content --}}
        <main class="container mx-auto mt-28">
            @yield('content')
        </main>
        {{-- Footer --}}
        @yield('footer')
    </div>
</body>

</html>
