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
        
            'nombre' => Str::random(25), // Cadena random de 25 caracteres
            'apellidos' => Str::random(45), // Cadena random de 45 caracteres
            'email' => $this->faker->unique()->safeEmail(), // Genera un email aleatorio único
            'telefono' => $this->faker->numerify('#########'), // Genera un número aleatorio de 9 dígitos
            'direccion' => Str::random(45) // Cadena rand
        ];
    }
}
