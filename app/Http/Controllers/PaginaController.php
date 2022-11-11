<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaginaController extends Controller
{
    public function landingpage(){
        return view('landingpage');
        
    }
    public function contacto ($contacto_id = null)
    {
        if($contacto_id =='1234'){
            $nombre ="Leonel Rubio";
            $correo ="leonel1232@hotmail.com";
        }
        else{
            $nombre = null;
            $correo = null;
        }
        return view('contacto',compact('nombre','correo'));
    }

    public function  recibeFormContacto(Request $request)
    {
       $request -> validate([
            'nombre'=> 'required|max:255|min:3',
            'correo'=> ['required','email'],
            'mensaje'=> 'required',
       ]);
       
       DB::table('contacto')->insert([
        'nombre'=>$request->nombre,
        'correo'=>$request->correo,
        'mensaje'=>$request->mensaje,
        'created_at'=> now(),
        'created_at'=> now(),
       ]);

       return redirect('/contacto');
    
    }
}


