<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $n=rand(10,100);
        $nombre = "Papotico";

        //return view("index", ["n"=>$n,"nombre"=>"Felipe"]);
        // PARA PASAR VALORES A UNA LISTA.
        return view("index", compact("n", "nombre"));
    }


}
