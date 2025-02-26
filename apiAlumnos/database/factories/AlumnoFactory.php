<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(), // Genera un email aleatorio único
            'telefono' => fake()->numerify('#########'), // Genera un número aleatorio de 9 dígitos
            'direccion' => fake()->address()
                ];
    }
}
