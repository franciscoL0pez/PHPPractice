<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-indigo-100 to-blue-200">
<div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-2xl">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">¡Bienvenido!</h1>

    <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div class="flex flex-col">
            <label for="email" class="text-sm font-semibold text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="email" required
                   class="rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition">
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="flex flex-col">
            <label for="password" class="text-sm font-semibold text-gray-700 mb-1">Password</label>
            <input type="password" name="password" id="password" required
                   class="rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent transition">
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botón de login -->
        <div>
            <button type="submit"
                    class="w-full py-3 rounded-lg bg-indigo-500 text-white font-bold hover:bg-indigo-600 transition duration-300">
                Ingresar
            </button>
        </div>

        <!-- Divider -->
        <div class="flex items-center justify-center my-4">
            <span class="text-sm text-gray-500">¿No tienes una cuenta?</span>
        </div>

        <!-- Link de registro -->
        <div>
            <a href="{{ route('register') }}"
               class="w-full block text-center py-3 rounded-lg border border-indigo-500 text-indigo-500 font-bold hover:bg-indigo-50 transition duration-300">
                Registrarse
            </a>
        </div>
    </form>
</div>
</body>
</html>

