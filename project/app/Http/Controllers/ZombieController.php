<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZombieController extends Controller
{ 
    public function index()
    {
        //return "Saca el six bro";

        return view('zombies.zombiecontroller');
    }
}
