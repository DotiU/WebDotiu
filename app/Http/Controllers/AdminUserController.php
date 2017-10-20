<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class AdminUserController extends Controller
{
  public function index(){
    $users = User::all();
    return view('admin./usuario.index', compact('users'));


  }
}
