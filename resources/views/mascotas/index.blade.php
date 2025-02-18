
<x-my-layout2>
    <h1>Lista de Mascotas</h1>

        <table>
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Descripción</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>
                        @if ($mascota->foto)
                            <img src="{{ asset('storage/' . $mascota->foto) }}" alt="{{ $mascota->nombre }}" width="50">
                        @else
                            <p>Sin foto</p>
                        @endif

                    </td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->descripcion }}</td>
                    <td>{{ $mascota->fecha_nacimiento }}</td>
                    <td>
                        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        <form action="{{ route('mascotas.edit', $mascota->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit">Editar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-my-layout2>