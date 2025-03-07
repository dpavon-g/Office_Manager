<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'rol',
        'fecha_de_nacimiento',
        'DNI',
        'email',
        'oficina_id'
    ];
}
