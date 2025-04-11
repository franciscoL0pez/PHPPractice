<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6dd5fa, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .edit-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            transition: transform 0.3s ease;
        }

        .edit-card:hover {
            transform: translateY(-5px);
        }

        .edit-card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"], input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons button, .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: bold;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buttons button:hover, .buttons a:hover {
            background-color: #45a049;
        }

        .buttons .back {
            background-color: #2196F3;
        }

        .buttons .back:hover {
            background-color: #1e88e5;
        }
    </style>
</head>
<body>

<div class="edit-card">
    <h2>Editar Perfil</h2>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Name" required>

        <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>

        <div class="buttons">
            <button type="submit">Guardar</button>
            <a href="{{ route('profile') }}" class="back">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>
