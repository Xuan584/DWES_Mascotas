<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nueva mascota</h1>

    <form action="{{ route('mascotas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <br>

        <label for="especie">Especie</label>
        <input type="text" name="especie" id="especie" required>

        <br>

        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" required></input>

        <br>

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto">

        <br>

        <label for="fecha_nacimiento">Fecha de nacimiento"></label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">

        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>