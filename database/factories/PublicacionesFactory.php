<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicaciones>
 */
class PublicacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    // Publicaciones: id, usuario_id, titulo(50), publicacion(250), fecha(date)
    {
        return [
            // usuario id ya existe en la tabla usuario usar Usuario::inRandomOrder()->pluck('id')->first(),
            'usuario_id' => Usuario::inRandomOrder()->pluck('id')->first(),
            'titulo' => $this->faker->lastName,
            'publicacion' => $this->faker->date,
            'fecha' => $this->faker->email,
        ];
    }
}
