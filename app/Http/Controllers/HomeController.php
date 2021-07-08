<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        //recuperar los anuncios del usuario para mostrarlos
        $anuncios= $request->user()->anuncios()->orderBy('id', 'desc')->paginate(10);
        
        //recuperar los anuncios BORRADOS del usuario para mostrarlos
        $anunciosBorrados= $request->user()->anuncios()->onlyTrashed()->orderBy('id', 'desc')->paginate(10);
        //dd($anunciosBorrados);
        
        return view('home', ['anuncios'=>$anuncios, 'anunciosBorrados'=>$anunciosBorrados]);
    }
}
