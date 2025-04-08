<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css']) <!-- Esto si estás usando Tailwind o tus estilos -->
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
<div class="w-full max-w-sm p-8 bg-white rounded shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- Token para proteger el formulario -->

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">
                Iniciar sesión
            </button>
        </div>
    </form>
</div>
</body>
</html>
