<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mascota;
use Illuminate\Support\Facades\Hash;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mascota::create([
            "nombre" => "Egan",
            "especie" => "Perro",
            "descripcion" => "Chiquito",
            "fecha_nacimiento" => "2024-01-01",
            'user_id' => 1
        ]);

        Mascota::create([
            "nombre" => "Leopoldo",
            "especie" => "Gato",
            "descripcion" => "Felino",
            "fecha_nacimiento" => "2024-01-02",
            'user_id' => 1
        ]);

        Mascota::create([
            "nombre" => "Cana",
            "especie" => "Canario",
            "descripcion" => "Canario",
            "fecha_nacimiento" => "2024-01-03",
            'user_id' => 2
        ]);
    }
}
