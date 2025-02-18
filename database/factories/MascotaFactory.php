<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->fake()->firstName(),
            'raza' => $this->fake()->randomElement(['Perro', 'Gato', 'Tortuga']),
            'descripcion' => "Descripción de muestra",
            'fecha_nacimiento' => $this->fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d')
        ];
    }
}
