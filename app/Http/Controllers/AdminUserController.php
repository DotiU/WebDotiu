<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UsuarioFormRequest;
use Illuminate\Support\Facades\Redirect;

class AdminUserController extends Controller
{
  public function index(){
    $users = User::all();
    return view('admin/usuario.index', compact('users'));


  }
  public function destroy(UsuarioFormRequest $request,$id)
  {
    $post =User::find($id);

    $post->delete();

    return Redirect::to('admin/usuario');
  }

  public function show(UsuarioFormRequest $request,$id)
  {
    $users=User::find($id);
$users->delete();
return Redirect::to('admin/usuario');
  }


}
