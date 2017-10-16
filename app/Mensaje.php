<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
protected $table = 'foro';
protected $fillable = ['idMensaje', 'titulo', 'mensaje'];
protected $primaryKey = 'idMensaje';

}
