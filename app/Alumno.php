<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  protected $fillable = [
      'id', 'matricula', 'nombre', 'genero', 'grado',
  ];
}
