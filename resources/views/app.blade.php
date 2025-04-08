<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-gray-800">
            Mi App
        </div>
        <div class="space-x-4">
            <a href="{{route("login")}}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login</a>
            <a href="#" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Register</a>
        </div>
    </div>
</nav>

<main class="flex-grow flex items-center justify-center">
    <h1 class="text-4xl font-semibold text-gray-800">Bienvenido a Mi App</h1>
</main>

<footer class="bg-white shadow-md mt-8">
    <div class="max-w-7xl mx-auto px-4 py-4 text-center text-gray-500 text-sm">
        © {{ date('Y') }} Mi App - Todos los derechos reservados.
    </div>
</footer>
</body>
</html>
