<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;

class AdminMapaController extends Controller
{
    public function index()
    {
      $ubicaciones = Mapa::all();
  return view('admin/mapa.index',compact('ubicaciones'));
    }

}
