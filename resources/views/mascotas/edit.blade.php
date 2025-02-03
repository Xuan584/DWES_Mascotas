<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mascota</title>
</head>
<body>
    <h1>Lista de Mascotas</h1>

    <form action="{{route('mascotas.update', $mascota->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$mascota->nombre}}" required>
        <br>
        <label for="especie">Especie</label>
        <input type="text" name="especie" value="{{$mascota->especie}}" required>
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="{{$mascota->descripcion}}" required>
        <br>
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}">
        <br>
        <label for="foto">Foto</label>
        <input type="file" name="foto" value="{{$mascota->foto}}">
        <br>
        <button type="submit">Guardar Mascota</button>
    </form>
    <a href="{{route('mascotas.index')}}">Volver</a>
</body>
</html>