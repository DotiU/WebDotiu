<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;

class MapaController extends Controller
{


  public function index(){
      $ubicaciones  = Mapa::all();
    return view('home.mapa', compact('ubicaciones'));

  }

}
