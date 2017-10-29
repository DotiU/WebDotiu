<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapa;
use DB;
use App\Http\Requests\UbicacionFormRequest;
use Illuminate\Support\Facades\Redirect;
class AdminMapaController extends Controller
{
    public function index()
    {
      $ubicaciones = Mapa::all();
  return view('admin/mapa.index',compact('ubicaciones'));
    }

    public function destroy(UbicacionFormRequest $request,$id)
    {
      $post =Mapa::find($id);

      $post->delete();

      return Redirect::to('admin/mapa');
    }

    public function show(UbicacionFormRequest $request,$id)
    {
      $ubicaciones=Mapa::find($id);
  $ubicaciones->delete();
  return Redirect::to('admin/mapa');
    }

}
