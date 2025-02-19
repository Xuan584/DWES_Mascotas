<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear una mascota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
