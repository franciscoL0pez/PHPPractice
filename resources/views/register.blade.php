<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    @vite(['resources/css/app.css']) <!-- Tus estilos con Tailwind -->
</head>
<body class="flex items-center justify-center min-h-screen text-gray-700">
<div class="w-full max-w-xs p-8 text-gray-700 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Crear cuenta</h1>

    <form method="POST" action="{{ route('register.post') }}">
        @csrf <!-- Token de seguridad -->

        <!-- Nombre -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" id="name" required
                   class="mt-1 block w-full rounded-md text-gray-700 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Botón de Registrarse -->
        <div>
            @if ($errors ->any())
                <div class="mb-4 text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit"
                    class="w-full py-2 px-4 bg-green-600 text-gray-700 font-semibold rounded-md hover:bg-green-700">
                Registrarse
            </button>
        </div>

        <!-- Link a Login -->
        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">¿Ya tienes cuenta? Iniciar sesión</a>
        </div>
    </form>
</div>
</body>
</html>
