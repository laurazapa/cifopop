<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'poblacion'=> ['required','string','min:3', 'max:255'],
            'telefono' => ['required','string', 'max:32'],
            'nacimiento'=> ['nullable','date'],
            'imagen'=> ['sometimes','file','image','mimes:jpg,png,gif,webp','max:2048']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){
        
        $imagen= isset($data['imagen'])? $data['imagen']:null;
        $data['imagen']= null; //posem null per defecte al camp imatge
        
        //recuperación de la imagen
        if($imagen){
            //sube la imagen al directorio indicado en el fichero de config
            $ruta= $imagen->store(config('filesystems.usersImageDir'));            
            //dd($ruta);
            
            //nos quedamos solo con el nombre del fichero para añadirlo a la BDD
            $data['imagen'] = pathinfo($ruta, PATHINFO_BASENAME);
        }
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'poblacion' => $data['poblacion'],
            'telefono'=> $data['telefono'],
            'nacimiento' => $data['nacimiento'],
            'imagen'=> $data['imagen']
        ]);
    }
}
