<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario($tipo_persona = null)
    {
        //dd($tipo_persona);
        return view('formulario_contacto', [
            'tipo_persona' => $tipo_persona
        ]);
        //return view('formulario_contacto',compact('tipo_persona')); <- Forma opcional 

    }

    public function lista()
    {
        $mensajes = Contacto::all(); //Obtiene todos los contactos 
        //dd($mensajes);
        return view('lista', [
            'mensajes' => $mensajes
        ]);
    }

    public function newContact(Request $request) //
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10']
        ]);

        $contacto = new Contacto(); //New contact
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;

        $contacto->save();
        //return "contactito registrado";
        return redirect('/lista'); //Redireccion

        return view('formulario_contacto');
    }
}
