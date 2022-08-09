<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Etiqueta;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class BlogController extends Controller{

    public function blog(){
        //Traemos toda la información de la tabla articulos (BBDD) a través del modelo Articulo.php
        $articulos = Articulo::all();
        return view('blog', [
            'articulos' => $articulos,
        ]);
    }

    public function panel(){
        return view( 'panel.index');
    }

    //Listar todos
    public function index(){
        //Traemos toda la información de la tabla articulos (BBDD) a través del modelo Articulo.php
        $articulos = Articulo::all();
        $etiquetas = Etiqueta::all();

        return view('blog.index', [
            'articulos' => $articulos,
            'etiquetas' => $etiquetas,
        ]);
    }

    //Detalle por id
    public function detalle($id){
        $articulo = Articulo::findOrFail($id);
        $etiquetas = Etiqueta::all();

        return view('blog.detalle', [
            'articulo' => $articulo,
            'etiquetas' => $etiquetas,
        ]);
    }

    //Crear - Formulario de creacción
    public function nuevoArticulo(){
        $etiquetas = Etiqueta::all();
        $etiquetaSelect = collect(old('etiqueta_id', []));

        return view('blog.nuevo-articulo', [
            'etiquetas' => $etiquetas,
            'etiquetaSelect' => $etiquetaSelect,
        ]);
    }

    //Crear - Función que nos validará los datos para la creación del artículo correctamente.
    public function crearArticulo(Request $request){
        //dd($request);
        $input = $request->input();

        //Validación de la nueva información que el usuario introduce por el formulario de editar. Models/Articulo
        $request->validate(Articulo::reglas(), Articulo::mensajeValidacion());
        //$request->validate(Etiqueta::reglas(), Etiqueta::mensajeValidacion());

        if($request->hasFile('imagen_portada')){
            $imagenPortada = $request->file('imagen_portada');
            $nombreImagen = time() . "." . $imagenPortada->clientExtension();
            //$imagenPortada->move(public_path('img'), $nombreImagen);
            //$imagenPortada->storeAs('img', $nombreImagen, 'public');
            //Con la nueva configuración del filesystems
            $imagenPortada->storeAs('', $nombreImagen, 'public_img');
            $input['imagen_portada'] = $nombreImagen;
        }

        if($request->hasFile('imagen_contenido')){
            $imagenContenido = $request->file('imagen_contenido');
            $nombreImagen = time() . "." . $imagenContenido->clientExtension();
            //$imagenPortada->move(public_path('img'), $nombreImagen);
            //$imagenPortada->storeAs('img', $nombreImagen, 'public');
            //Con la nueva configuración del filesystems
            $imagenContenido->storeAs('', $nombreImagen, 'public_img');
            $input['imagen_contenido'] = $nombreImagen;
        }

        //Creamos el insert con el método create(), agrega las keys del array que esten en la propiedad $fillable del modelo.
        $articulo = Articulo::create($input);

        $etiquetaId = $request->input('etiqueta_id') ?? [];
        $articulo->etiquetas()->attach($etiquetaId);

        return redirect()
            ->route('blog.index')
            //La función e() escapa cualquier caracter de HTML.
            ->with('message_success', 'El articulo <b>' . e($articulo->titulo) . '</b> fue creado correctamente.');
    }

    //Editar - Formulario de edición
    public function editarArticulo($id){
        //Buscamos el articulo por el id
        $articulo = Articulo::findOrFail($id);
        $etiquetas = Etiqueta::all();
        $etiquetaSelect = collect(old('etiqueta_id', $articulo->etiquetas->pluck('etiqueta_id')));

        //Redireccionamos a la vista del formulario donde podremos editar y pasamos la informaciónd el artículo a editar.
        return view('blog.editar-articulo', [
            'articulo' => $articulo,
            'etiquetas' => $etiquetas,
            'etiquetaSelect' => $etiquetaSelect,
        ]);

    }

    //Editar - Función que nos validará los datos para la edición del artículo correctamente.
    public function editadoArticulo(Request $request, $id){
        //Validación de la nueva información que el usuario introduce por el formulario de editar. Models/Articulo
        $request->validate(Articulo::reglas(), Articulo::mensajeValidacion());
        //$request->validate(Etiqueta::reglas(), Etiqueta::mensajeValidacion());

        $input = $request->input();
        $articulo = Articulo::findOrFail($id);

        if($request->hasFile('imagen_portada')){
            $imagenPortada = $request->file('imagen_portada');
            $nombreImagen = time() . "." . $imagenPortada->clientExtension();
            //Con la nueva configuración del filesystems
            $imagenPortada->storeAs('', $nombreImagen, 'public_img');
            $input['imagen_portada'] = $nombreImagen;
            $imagenPortadaVieja = $articulo->imagen_portada;
        }else{
            $imagenPortadaVieja = null;
        }

        if($request->hasFile('imagen_cotenido')){
            $imagenContenido = $request->file('imagen_cotenido');
            $nombreImagenContenido = time() . "." . $imagenContenido->clientExtension();
            //Con la nueva configuración del filesystems
            $imagenContenido->storeAs('', $nombreImagenContenido, 'public_img');
            $input['imagen_cotenido'] = $nombreImagenContenido;
            $imagenContenidoVieja = $articulo->imagen_portada;
        }else{
            $imagenContenidoVieja = null;
        }

        $articulo->update($input);
        $etiquetaId = $request->input('etiqueta_id') ?? [];
        $articulo->etiquetas()->sync($etiquetaId);

        if($request->hasFile('imagen_portada')){
            //unlink es la función de php para borrar un archivo en el disco.
            unlink(public_path('img/' . $imagenPortadaVieja));
        }

        if($request->hasFile('imagen_cotenido')){
            //unlink es la función de php para borrar un archivo en el disco.
            unlink(public_path('img/' . $imagenContenidoVieja));
        }

        return redirect()
            ->route('blog.index')
            //La función e() escapa cualquier caracter de HTML.
            ->with('message_success', 'El articulo <b>' . e($articulo->titulo) . '</b> fue editado correctamente.');
    }


    //Eliminar
    public function eliminar($id){
        //Buscamos el articulo por el id
        $articulo = Articulo::findOrFail($id);

        //detach() elimina todos los datos de una tabla pivot
        $articulo->etiquetas()->detach();

        //Utilizamos el método delete() de laravel para eliminarlo de la BBDD
        $articulo->delete();

        //Redireccioamos
        return redirect()
            ->route('blog.index')
            //La función e() escapa cualquier caracter de HTML.
            ->with('message_success', 'El articulo <b>' . e($articulo->titulo) . '</b> se eliminó correctamente.');
    }

}
