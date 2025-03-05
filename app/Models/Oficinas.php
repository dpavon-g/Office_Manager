<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Oficinas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
    ];

    public function empleados(): HasMany
    {
        return $this->hasMany(Empleados::class, 'oficina_id');
    }
}
