<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoEmail;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactoFormRequest;
use App\Contacto;

class ContactoController extends Controller
{
    public function enviarContacto(Request $request)
    {
Mail::to('dotiucr@gmail.com')->send(new ContactoEmail($request));
    }

    public function index(){
      $contactos = Contacto::all();
  return view('admin/contacto.index',compact('contactos'));

    }

    public function create()
    {

          return view('admin/producto/create');
    }



  public function store(Request $request)
  {

      $contactos = new Contacto;
      $contactos->nombre=$request->get('nombre');
      $contactos->correo=$request->get('correo');
      $contactos->asunto=$request->get('asunto');
      $contactos->mensaje=$request->get('mensaje');
      $contactos->save();
return Redirect::to('contact');
    }

    public function destroy(ContactoFormRequest $request,$id)
    {
      $contactos =Contacto::find($id);

      $post->delete();

      return Redirect::to('admin/contacto');
    }
    public function show(ContactoFormRequest $request,$id)
    {
      $contactos=Contacto::find($id);
      $contactos->delete();
  return Redirect::to('admin/contacto');
    }
}
