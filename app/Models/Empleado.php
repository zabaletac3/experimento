<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'empresa_id',
        'nombre',
        'apellido',
        'edad',
        'sexo',
    ];

    protected $hidden = [];

    public function contacto() {
        // $contacto = EmpleadoInfoContacto::where('empleado_id', $this->id)->first();
        // return $contacto;
        return $this->hasOne(EmpleadoInfoContacto::class);
    }

    public function salud() {
        return $this->hasOne(InfoSalud::class);
    }
}
