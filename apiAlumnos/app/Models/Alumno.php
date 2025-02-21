<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'direccion'];
    
    protected $hidden = ['created_at', 'updated_at'];
}
