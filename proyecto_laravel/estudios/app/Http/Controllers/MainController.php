<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $n=rand(10,100);
        return view("index", ["n"=>$n,"nombre"=>"Ana"]);
    }
}
