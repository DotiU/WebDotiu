<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoEmail;

class ContactoController extends Controller
{
    public function enviarContacto(Request $request)
    {
Mail::to('dotiucr@gmail.com')->send(new ContactoEmail($request));
    }
}
