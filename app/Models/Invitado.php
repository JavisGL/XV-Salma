<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
     protected $table = 'invitadosSalma';

    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'invitados_extra',
    ];
}
