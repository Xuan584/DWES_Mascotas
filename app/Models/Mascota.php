<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $fillable = ['nombre', 'especie', 'descripcion', 'foto', 'fecha_nacimiento'];
}
