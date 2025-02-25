<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'celular',
        'estado_civil',
        'data_nascimento',
        'cidade',
        'estado',
        'endereco',
        'cep',
        'password'
    ];
}
