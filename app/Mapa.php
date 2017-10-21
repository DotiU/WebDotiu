<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
  protected $table = 'posicion';
  protected $fillable = ['id', 'lat', 'lng','comentario','tipo','validar'];
  protected $primaryKey = 'id';
}
