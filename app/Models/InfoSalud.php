<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSalud extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'empleado_id',
        'eps',
        'arl',
        'contrato',
    ];

    public function empleado() {
        return $this->belongsTo(Empleado::class);
    }
}
