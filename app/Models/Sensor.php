<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'nome_sensor',
        'tipo_sensor',
        'temperatura',
        'umidade',
        'luminosidade',
        'sensor_ativo',
    ];
}
