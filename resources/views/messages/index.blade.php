<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes</title>
    @vite(['resources/css/app.css']) <!-- Asegurate que Tailwind esté cargando -->
</head>
<body class="min-h-screen bg-gray-100 flex flex-col items-center p-8">

<div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Message</h1>

    <a href="{{ route('app') }}"
       class="absolute top-4 right-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-300">
        Log out
    </a>

    <!-- Formulario de Nuevo Mensaje -->
    <form action="{{ route('messages.store') }}" method="POST" class="flex gap-2 mb-6">
        @csrf
        <input type="text" name="text" placeholder="Type your message" required
               class="flex-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
            Save
        </button>
    </form>

    <!-- Lista de Mensajes -->
    <ul class="space-y-3">
        @forelse ($messages as $message)
            <li class="flex justify-between items-center p-3 bg-gray-50 rounded-md shadow-sm">
                <span class="text-gray-700">{{ $message->text }}</span>
                <!-- Opcional: Botones para Editar o Eliminar -->
                <div class="flex gap-2">
                    <a href="{{ route('messages.edit', $message) }}"
                       class="text-sm text-blue-600 hover:underline">Editar</a>
                    <form action="{{ route('messages.destroy', $message) }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar este mensaje?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-red-600 hover:underline">Eliminar</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="text-center text-gray-500">Don't have messages now </li>
        @endforelse
    </ul>
</div>

</body>
</html>
