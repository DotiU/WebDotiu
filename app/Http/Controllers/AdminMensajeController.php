<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mensaje;
use App\Http\Requests\MensajeFormRequest;
use DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AdminMensajeController extends Controller
{
  public function index(){
    $mensajes = Mensaje::all();
return view('admin/mensaje.index',compact('mensajes'));
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


  public function show(MensajeFormRequest $request,$id)
  {
    $mensajes=Mensaje::find($id);
    $mensajes->delete();
return Redirect::to('admin/mensaje');
  }

  public function edit($id){
      return view("admin/mensaje.edit", ["mensajes"=>Mensaje::findOrFail($id)]);
     }

     public function update(UsuarioFormRequest $request, $id){
      $mensajes= Mensajes::findOrFail($id);
      $mensajes->titulo=$request->get('titulo');
        $mensajes->mensaje=$request->get('mensaje');
          $mensajes->usuario=$request->get('usuario');

      $user->update();
       return Redirect::to('admin/mensaje');

     }


}
