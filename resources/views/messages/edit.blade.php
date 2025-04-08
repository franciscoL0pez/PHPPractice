<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mensaje</title>
</head>
<body>
<h1>Editar Mensaje</h1>

<form action="{{ route('messages.update', $message->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="text" value="{{ $message->text }}" required>
    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('messages.index') }}">Volver</a>
</body>
</html>
