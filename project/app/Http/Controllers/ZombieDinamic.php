<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZombieDinamic extends Controller
{
    public function index(){
        //$nombre = "Peter B.";
        //return view('zombies.otrozombiealv' ,[
        //    'elnombre' => $nombre
        //]);

        $nombre = "Luis Mauricio";
        $apellidos = "Nahuat Pech";
        return view('zombies.otrozombiealv')
        ->with('elnombre', $nombre)
        ->with('elapellido', $apellidos);
    }
}
