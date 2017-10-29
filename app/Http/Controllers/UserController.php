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
      $users = new User;
      $users->name=$request->get('name');
      $users->last_name=$request->get('last_name');
      $users->email=$request->get('email');
      $users->user=$request->get('user');
      $users->password=Hash::make($request->get('password'));
      $users->address=$request->get('address');
      $users->type=$request->get('type');

      $users->save();
      return Redirect::to('home');
    }
}
