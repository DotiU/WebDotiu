<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class UserController extends Controller
{

  public function index(){
    $user = User::all();
    return view('store.perfil', compact('users'));

  }

  public function show($id)
  {
    $user = User::where('id', $id)->first();
    return view('store.perfil', compact('user'));
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
