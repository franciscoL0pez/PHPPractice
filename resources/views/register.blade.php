<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite(['resources/css/app.css']) <!-- Tus estilos con Tailwind -->
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-indigo-100 to-blue-200">
<!-- Contenedor principal -->
<div class="w-full max-w-md p-8 bg-white shadow-lg rounded-xl">
    <h1 class="text-3xl font-bold mb-6 text-center">Crear cuenta</h1>

    <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
        @csrf

        <!-- Nombre -->
        <div>
            <label for="name" class="block font-medium text-base text-gray-700 mb-1">Nombre</label>
            <input id="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                   type="text" name="name" value="{{ old('name') }}" required autofocus />
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block font-medium text-base text-gray-700 mb-1">Email</label>
            <input id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                   type="email" name="email" value="{{ old('email') }}" required />
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Contraseña -->
        <div>
            <label for="password" class="block font-medium text-base text-gray-700 mb-1">Contraseña</label>
            <input id="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                   type="password" name="password" required />
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirmar Contraseña -->
        <div>
            <label for="password_confirmation" class="block font-medium text-base text-gray-700 mb-1">Confirmar Contraseña</label>
            <input id="password_confirmation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                   type="password" name="password_confirmation" required />
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botón de enviar + Link de login uno abajo del otro -->
        <div class="flex flex-col items-center mt-6">
            <button type="submit"
                    class="inline-flex items-center px-6 py-2 bg-white border border-black rounded-md font-semibold text-sm text-black uppercase tracking-widest hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2">
                Registrarse
            </button>

            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline mt-4">
                ¿Ya tienes cuenta? Iniciar sesión
            </a>
        </div>
    </form>
</div>
</body>
</html>

