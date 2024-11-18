<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public $fillable = [
        'nome',
        'cep',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'capacidade',
        'is_active'
    ];
}
