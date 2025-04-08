<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css']) <!-- Si estás usando Tailwind -->
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
<div class="w-full max-w-xs p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

    <form method="POST" action="#" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="email" required
                   class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" id="password" required
                   class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
        </div>

        <!-- Botones -->
        <div class="flex flex-col gap-3 mt-6">
            <button type="submit"
                    class="w-full py-2 bg-blue-600 text-gray-700 font-semibold rounded-md hover:bg-blue-700 transition">
                Ingresar
            </button>

            <a href="{{ route('register') }}"
               class="w-full py-2 text-center bg-gray-200 text-gray-700 font-semibold rounded-md hover:bg-gray-300 transition">
                Registrarse
            </a>
        </div>
    </form>
</div>
</body>
</html>
