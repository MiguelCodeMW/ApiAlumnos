<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nombre' => 'Nombre: ' . $this->nombre,
            'apellidos' => 'Apellidos: ' . $this->apellidos,
            'email' => 'Email: ' . $this->email,
            'telefono' => 'Telefono; ' . $this->telefono,
            'direccion' => 'Direccion: ' . $this->direccion,
        ];
    }
}
