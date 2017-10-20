<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mensaje;
use App\Http\Requests\MensajeFormRequest;
use DB;

use Illuminate\Http\Request;

class AdminMensajeController extends Controller
{
  public function index(){
    $mensajes = Mensaje::all();
return view('admin/categoria.index',compact('mensajes'));

  }

  public function create()
  {

        return view('admin/producto/create');
  }



public function store(Request $request)
{

    $mensajes = new Mensaje;
     $mensajes->titulo=$request->get('titulo');
      $mensajes->mensaje=$request->get('mensaje');
        $mensajes->usuario=$request->get('usuario');

 $mensajes->save();


     return Redirect::to('foro');
  }

}
