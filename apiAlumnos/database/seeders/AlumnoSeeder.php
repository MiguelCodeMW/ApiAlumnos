<?php
namespace Database\Seeders;
use App\Models\Alumno; 
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
/*         Alumno::create([
            'nombre' => "Nombre1",
            'apellidos' => "Apellido apellido",
            'email' => "prueba@gmail.com",
            'telefono' => 957112233,
            'direccion' => 'Calle direccion 132, 9a'
        ]);

        Alumno::create([
            'nombre' => "Nombre2",
            'apellidos' => "Apellido2 apellido2",
            'email' => "prueba@gmail.com",
            'telefono' => 957112233,
            'direccion' => 'Calle direccion 132, 9a'
        ]);

        Alumno::create([
            'nombre' => "Nombre3",
            'apellidos' => "Apellido3 apellido3",
            'email' => "prueba@gmail.com",
            'telefono' => 957112233,
            'direccion' => 'Calle direccion 132, 9a'
        ]);

        Alumno::create([
            'nombre' => "Nombre4",
            'apellidos' => "Apellido4 apellido4",
            'email' => "prueba@gmail.com",
            'telefono' => 957112233,
            'direccion' => 'Calle direccion 132, 9a'
        ]); */
        Alumno::factory()->count(20)->create();
    }
}
