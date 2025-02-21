<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        $mascotas = Mascota::paginate(5);

        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'fecha_nacimiento' => 'nullable|date',
        ]);

        // Subir la foto de la mascota
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $validated['user_id'] = request()->user()->id;

        // Guardar la mascota en la base de datos
        Mascota::create($validated);
        // Redirigir al usuario a la lista de mascotas
        return redirect()->route('mascotas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mascota = Mascota::findOrFail($id);

        if(!$mascota->user_id !== Auth::user()) {
            abort(403, 'No tienes permiso para editar esta mascota.');
            return redirect()->route('mascotas.index');
        }

        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'foto' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'fecha_nacimiento' => 'nullable|date',
        ]);

        // Buscar la mascota por su ID
        $mascota = Mascota::findOrFail($id);

        // Actualizar los datos de la mascota
        $mascota->update($validated);

        // Redirigir al usuario a la lista de mascotas
        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar la mascota por su ID
        $mascota = Mascota::findOrFail($id);

        // Eliminar la mascota
        $mascota->delete();

        // Redirigir al usuario a la lista de mascotas
        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada correctamente.');
    }
}
