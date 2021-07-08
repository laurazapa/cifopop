<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller{
    //crear el método index, que te lleva a la portada
    public function index(){
        return view('welcome');
    }
}
