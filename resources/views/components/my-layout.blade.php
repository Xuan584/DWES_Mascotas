<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi título</title>
</head>
<body>
    <nav>
        <a href="{{ route('mascotas.index') }}">Lista de mascotas</a>
        <a href="{{ route('mascotas.create') }}">Crear mascota</a>
    </nav>

    {{ $slot }}

    <footer>
        <p>Mi sitio web</p>
    </footer>
</body>
</html>