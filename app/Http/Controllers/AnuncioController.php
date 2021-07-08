<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AnuncioRequest;
use App\Models\User;


class AnuncioController extends Controller{
    
    // constructor: para poner middlewares
    public function __construct(){
        $this->middleware('verified')->except('index','show','search');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //recuperar todos los anuncios
        $anuncios= Anuncio::orderBy('id', 'DESC')->paginate(20);
        
        //cargar la vista de lista de anuncios
        return view('anuncios.list', ['anuncios'=>$anuncios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //cargar la vista con el formulario
        return view('anuncios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnuncioRequest $request){
        //recuperar datos del formulario excepto la imagen
        $datos= $request->only(['titulo','descripcion','precio']);
        
        //el valor por defecto para la imagen será NULL
        $datos += ['imagen'=>NULL];
        
        //recuperación de la imagen
        if($request->hasFile('imagen')){
            //sube la imagen al directorio indicado en el fichero de config
            $ruta= $request->file('imagen')->store(config('filesystems.anunciosImageDir'));
            //echo $ruta;
            
            //nos quedamos solo con el nombre del fichero para añadirlo a la BDD
            $datos['imagen'] = pathinfo($ruta, PATHINFO_BASENAME);
        }
        
        //recuperación del id del usuario
        $datos += ['user_id'=>$request->user()->id];
        
        //creación y guardado del nuevo anuncio con todos los datos POST
        $anuncio= Anuncio::create($datos);
        
        //redirección a los detalles del anuncio creado
        return redirect()
            ->route('anuncios.show', $anuncio->id) //aquí hauriem de passar tambe el nom del usuari i la poblacio!!!
            ->with('success', "Anuncio de $anuncio->titulo con precio $anuncio->precio añadido correctamente.")
            ->cookie('lastInsertID', $anuncio->id,0);
        //adjuntem una cookie amb nom lastInsertID, amb valor id i temps 0 (de sessio)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio){
        //recuperar el propietario del anuncio
        $idPropietario= $anuncio->user_id;
        $propietario= User::findOrFail($idPropietario);
        //dd($propietario);
        
        //carga la vista correspondiente y le pasa el anuncio
        return view('anuncios.show',['anuncio'=>$anuncio, 'propietario'=>$propietario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Anuncio $anuncio){
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
            abort(401,'No puedes editar un anuncio que no es tuyo.');
            
        //carga la vista con el formulario para modificar el anuncio
        return view('anuncios.update',['anuncio'=>$anuncio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(AnuncioRequest $request, Anuncio $anuncio){
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
            abort(401,'No puedes editar un anuncio que no es tuyo.');
            
        //toma los datos del formulario
        $datos= $request->only(['titulo','descripcion','precio']);
        
        //si llega una nueva imagen...
        if($request->hasFile('imagen')){
            //marcamos la imagen antigua para ser borrada si el update va bien
            if($anuncio->imagen)
                $aBorrar= config('filesystems.anunciosImageDir').'/'.$anuncio->imagen;
                
            //sube la imagen al directorio indicado en el fichero de config
            $imagenNueva= $request->file('imagen')->store(config('filesystems.anunciosImageDir'));
            
            //nos quedamos solo con el nombre del fichero para añadirlo a la BDD
            $datos['imagen'] = pathinfo($imagenNueva, PATHINFO_BASENAME);
        }
        
        //en caso de que nos pidan eliminar la imagen
        if($request->filled('eliminarimagen') && $anuncio->imagen){
            //poner el campo imagen a null de la tabla
            $datos['imagen']= NULL;
            //borrar la imagen
            $aBorrar= config('filesystems.anunciosImageDir').'/'.$anuncio->imagen;
        }
        
        // al actualitzar tenemos que tener en cuenta...
        if($anuncio->update($datos)){ //si todo va bien
            if(isset($aBorrar))
                Storage::delete($aBorrar); //borramos la foto antigua
                
        }else{ //si algo falla...
            if(isset($imagenNueva))
                Storage::delete($imagenNueva); //borramos la foto nueva
        }
        
        //carga la misma vista y muestra el mensaje de éxito
        return back()->with('success',"Anuncio de $anuncio->titulo con precio $anuncio->precio € actualizado");
        //->cookie('lastUpdateID', $bike->id, 0);
    }

    /**
     * Muestra el formulario de confirmacion de borrado de anuncio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, Anuncio $anuncio){
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
            abort(401,'No puedes eliminar un anuncio que no es tuyo.');
             
         //muestra la vista de confirmación de eliminación
         return view('anuncios.delete', ['anuncio'=>$anuncio]);
    }    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Anuncio $anuncio){
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
           abort(401,'No puedes eliminar un anuncio que no es tuyo.');
            
        // NO!! Perque hi ha el softdelete!!! Sino perdem la imatge!! si se consigue eliminar el anuncio y si tiene imagen...
        // if($anuncio->delete() && $anuncio->imagen)
            //borrar la foto de la moto de la carpeta
            //Storage::delete(config('filesystems.anunciosImageDir').'/'.$anuncio->imagen);
        
        $anuncio->delete();
        
        //redirige a la lista de anuncios
        return redirect('anuncios')
            ->with('success',"Anuncio $anuncio->titulo con precio $anuncio->precio € eliminado");
    }
    
    /**
     * Buscar anuncios por titulo y descripcion.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
        //validación de datos de entrada mediante validator
        $request->validate([
            'titulo'=>'required|max:16',
            'descripcion'=>'max:16'
        ]);
        
        //toma los valores que llegan para marca y modelo
        //pueden llegar del formulario (POST) o por query string (GET)
        $titulo= $request->input('titulo', '');
        $descripcion= $request->input('descripcion', '');
        $orden= $request->input('orden');
        $sentido= $request->input('sentido');
        
        //realizar la consulta
        //recupera los resultados, añadimos marca y modelo al paginator
        //para que haga bien los enlaces y se mantenga en el filtro al pasar página
        $anuncios= Anuncio::where('titulo','like',"%$titulo%")
                ->where('descripcion','like',"%$descripcion%")
                ->orderBy($orden, $sentido)
                ->paginate(20)
                ->appends(['titulo'=>$titulo,'descripcion'=>$descripcion,'orden'=>$orden,'sentido'=>$sentido]);
        
        //carregar la vista de lista
        return view('anuncios.list', ['anuncios'=>$anuncios, 'titulo'=>$titulo, 'descripcion'=>$descripcion, 'orden'=>$orden, 'sentido'=>$sentido]);
    }
    
    
    /**
     * Remove permanently the specified resource from storage (FORCEDELETE).
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function forcedelete(Request $request, $id){
        //recuperar el anuncio borrado
        $anuncio= Anuncio::withTrashed()->find($id);
        
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
            abort(401,'No puedes eliminar un anuncio que no es tuyo.');
            
        // si se consigue eliminar el anuncio y si tiene imagen...
        if($anuncio->forceDelete() && $anuncio->imagen)
            //borrar la foto de la moto de la carpeta
            Storage::delete(config('filesystems.anunciosImageDir').'/'.$anuncio->imagen);
            
        //redirige a la lista de anuncios
        return redirect('anuncios')
        ->with('success',"Anuncio $anuncio->titulo con precio $anuncio->precio € eliminado definitivamente.");
    }
    
    /**
     * Restore the specified resource.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request, $id){
        //recuperar el anuncio borrado
        $anuncio= Anuncio::withTrashed()->find($id);
        
        //comprobar si el usuario puede hacer la operación
        if($request->user()->cant('edit', $anuncio))
            abort(401,'No puedes restaurar un anuncio que no es tuyo.');
            
        //restaurar el anuncio
        $anuncio->restore();
                
        //redirige a la lista de anuncios
        return redirect('anuncios')
        ->with('success',"Anuncio $anuncio->titulo con precio $anuncio->precio € restaurado.");
    }
    
    
}
