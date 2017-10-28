<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
  protected $table = 'contacto';
  protected $fillable = ['nombre', 'correo', 'asunto','mensaje','id'];
  protected $primaryKey = 'id';
}
