<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UsuarioFormRequest;
use Illuminate\Support\Facades\Redirect;
use Hash;
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



  public function create()
  {

        return view('admin/usuario/create');
  }

public function store(Request $request)
{


    $users = new User;
    $users->name=$request->get('name');
    $users->last_name=$request->get('last_name');
    $users->email=$request->get('email');
    $users->user=$request->get('user');
    $users->password=Hash::make($request->get('password'));
    $users->address=$request->get('address');
    $users->type=$request->get('type');

    $users->save();
    return Redirect::to('admin/usuario');
  }

  public function update(ProductoFormRequest $request,$id)
  {
    $users= User::findOrFail($id);
    $users->name=$request->get('name');
    $users->last_name=$request->get('last_name');
    $users->email=$request->get('email');
    $users->user=$request->get('user');
    $users->password=Hash::make($request->get('password'));
    $users->address=$request->get('address');
    $users->type=$request->get('type');
    $users->update();

      return Redirect::to('/admin/usuario');

  }

  public function edit($id)
  {
    $users=User::findOrFail($id);
    return view("admin/usuario/edit",["user"=>$users]);
  }
}
