<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $fillable = [
        'plan',
        'costo_mensual',
        'maximo_dias',
        'vencimiento',
    ];
}
