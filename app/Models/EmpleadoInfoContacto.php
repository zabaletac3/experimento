<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoInfoContacto extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'empleado_id',
        'telefono',
        'celular',
        'direccion',
        'email',
    ];

    protected $hidden = [];

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }

}
