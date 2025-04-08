<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes</title>
</head>
<body>
<h1>Mensajes</h1>

<form action="{{ route('messages.store') }}" method="POST">
    @csrf
    <input type="text" name="text" placeholder="Escribí un mensaje" required>
    <button type="submit">Guardar</button>
</form>

<ul>
    @foreach ($messages as $message)
        <ul>
            @forelse ($messages as $message)
                <li>{{ $message->text }}</li>
            @empty
                <li>No hay mensajes aún.</li>
            @endforelse
        </ul>
    @endforeach
</ul>
</body>
</html>
