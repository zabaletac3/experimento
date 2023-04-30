<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'razon_social',
        'nit',
        'email',
    ];

    protected $hidden = [];

    public function empleados() {
        return $this->hasMany(Empleado::class);
    }

}
