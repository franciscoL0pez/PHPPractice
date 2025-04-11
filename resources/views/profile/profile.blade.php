<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Usuario</title>
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
        .profile-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
            transition: transform 0.3s ease;
        }
        .profile-card:hover {
            transform: translateY(-5px);
        }
        .profile-card img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px solid #4CAF50;
        }
        .profile-card h2 {
            margin: 10px 0 5px;
            font-size: 26px;
            color: #333;
        }
        .profile-card p {
            margin: 5px 0;
            color: #666;
            font-size: 16px;
        }
        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: bold;
            background-color: #4CAF50;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .buttons a:hover {
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

<div class="profile-card">
    <!-- Foto de perfil -->
    <img src="{{ $user->photo_url ?? 'https://via.placeholder.com/120' }}" alt="Foto de perfil">

    <!-- Información del usuario -->
    <h2>{{ $user->name ?? 'Fran' }} {{ $user->lastname ?? 'López' }}</h2>
    <p><strong>Email:</strong> {{ $user->email ?? 'test@example.com' }}</p>

    <!-- Botones -->
    <div class="buttons">
        <a href="{{ route('profile.edit') }}">Editar Perfil</a>
        <a href="{{ route('message') }}" class="back">Volver</a>
    </div>
</div>

</body>
</html>
