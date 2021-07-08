<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Anuncio;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user){
        //recuperar los anuncios del usuario para mostrarlos
        $anuncios= $user->anuncios()->orderBy('id', 'desc')->paginate(10);
        //dd($anuncios);
        //cargar la vista
        if(Auth::user() && $user->id == Auth::user()->id)
            return redirect()->route('home');
        else
            return view('users.show', ['anuncios'=>$anuncios, 'user'=>$user]);
            //return view('anuncios.list', ['anuncios'=>$anuncios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user){
        //comprobar si el usuario puede hacer la operación
        if(Auth::user() && Auth::user() == $user)
            //carga la vista con el formulario para modificar el usuario
            return view('users.update',['user'=>$user]);
        else
            abort(401,'No puedes editar los datos de otro usuario.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        //comprobar si el usuario puede hacer la operación
        if(!Auth::user() || Auth::user() != $user)
            abort(401,'No puedes editar los datos de otro usuario.');
            
        //validación de datos de entrada mediante validator
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email,$user->id"],           
            'poblacion'=> ['required','string','min:3', 'max:255'],
            'telefono' => ['required','string', 'max:32'],
            'nacimiento'=> ['nullable','date'],
            'imagen'=> ['sometimes','file','image','mimes:jpg,png,gif,webp','max:2048']
        ]);        
        //dd($request);
             
        //toma los datos del formulario
        $datos= $request->only(['name','email','poblacion','telefono','nacimiento']);
        
        //si llega el password...
        if($request->filled('password')){
            $request->validate(['password'=>['required', 'string', 'min:8', 'confirmed']]);
            $datos['password']= Hash::make($request->input('password'));
        }        
        
        //si llega una nueva imagen...
        if($request->hasFile('imagen')){
            //marcamos la imagen antigua para ser borrada si el update va bien
            if($user->imagen)
                $aBorrar= config('filesystems.usersImageDir').'/'.$user->imagen;
                
                //sube la imagen al directorio indicado en el fichero de config
                $imagenNueva= $request->file('imagen')->store(config('filesystems.usersImageDir'));
                
                //nos quedamos solo con el nombre del fichero para añadirlo a la BDD
                $datos['imagen'] = pathinfo($imagenNueva, PATHINFO_BASENAME);
        }
        
        //en caso de que nos pidan eliminar la imagen
        if($request->filled('eliminarimagen') && $user->imagen){
            //poner el campo imagen a null de la tabla
            $datos['imagen']= NULL;
            //borrar la imagen
            $aBorrar= config('filesystems.usersImageDir').'/'.$user->imagen;
        }
        
        // al actualitzar tenemos que tener en cuenta...
        if($user->update($datos)){ //si todo va bien
            if(isset($aBorrar))
                Storage::delete($aBorrar); //borramos la foto antigua
                
        }else{ //si algo falla...
            if(isset($imagenNueva))
                Storage::delete($imagenNueva); //borramos la foto nueva
        }
        
        //carga la misma vista y muestra el mensaje de éxito
        return back()->with('success',"$user->name, tus datos se han actualizado.");
    }
    
    /**
     * Muestra el formulario de confirmacion de borrado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, User $user){
        //comprobar si el usuario puede hacer la operación
        if(!Auth::user() || Auth::user() != $user)
            abort(401,'No puedes dar de baja a otro usuario.');
            
        //muestra la vista de confirmación de eliminación
        return view('users.delete', ['user'=>$user]);
    }    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user){
        //comprobar si el usuario puede hacer la operación
        if(!Auth::user() || Auth::user() != $user)
            abort(401,'No puedes dar de baja a otro usuario.');
        
        //para borrar las fotos de los anuncios de este usuario si se le pudo borrar
        $anuncios= Anuncio::withTrashed()->where('user_id',$user->id)->get();
        
        // si se consigue eliminar el usuario y si tiene imagen...
        if($user->delete() && $user->imagen){
            //borrar la foto de la moto de la carpeta
            Storage::delete(config('filesystems.usersImageDir').'/'.$user->imagen);
            
            //borrar las fotos de los anuncios de este usuario
            //dd($anuncios);
            foreach($anuncios as $anuncio)
                Storage::delete(config('filesystems.anunciosImageDir').'/'.$anuncio->imagen);
                
        }
        //redirige a la portada
        return redirect('portada')
            ->with('success',"Te has dado de baja correctamente.");
    }

}
