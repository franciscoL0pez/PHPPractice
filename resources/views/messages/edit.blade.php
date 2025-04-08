<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mensaje</title>
    @vite(['resources/css/app.css']) <!-- Para usar Tailwind -->
</head>
<body class="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-8">

<div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Editar Mensaje</h1>

    <form action="{{ route('messages.update', $message->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="text" class="block text-sm font-medium text-gray-700 mb-1">Mensaje</label>
            <input type="text" name="text" id="text" value="{{ $message->text }}" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                Actualizar
            </button>
            <a href="{{ route('messages.index') }}" class="text-blue-600 hover:underline text-sm">
                Volver
            </a>
        </div>
    </form>
</div>

</body>
</html>
