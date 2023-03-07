<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Support\Facades\File;


class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articulos=Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=Categoria::all();
        return view('articulo.create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $articulos = new Articulo();
        $articulos->nombre = $request->get('nombre');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->precio = $request->get('precio');
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = $imagen->getClientOriginalName();
            $ruta           = public_path("images/articulo/");
            $imagen->move($ruta,$nombreimagen);
            $articulos->imagen = $nombreimagen;        
    }
        $articulos->cantidad = $request->get('cantidad');
        $articulos->categoria_id = $request->get('categoria_id');
        $articulos->talla = $request->get('talla');
        $articulos->color = $request->get('color');
        $articulos->save();

        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = Categoria::all();
        $articulo = Articulo::join('categorias', 'articulos.categoria_id', '=', 'categorias.id')->select('articulos.*','categorias.nombre as name','categorias.descripcion as descp') ->find($id);
        
         return view('articulo.edit',['articulo'=>$articulo,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $articulo = Articulo::find($id);     
        $articulo->nombre = $request->get('nombre');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->precio = $request->get('precio');
        if($request->hasFile("imagen")){
            
            if($articulo->imagen != ''  && $articulo->imagen != null){
                $path = public_path().'/images/articulo/';
                $file_old = $path.$articulo->imagen;
                unlink($file_old);
            }


            $imagen = $request->file("imagen");
            $nombreimagen = $imagen->getClientOriginalName();
            $ruta           = public_path("images/articulo/");
            $imagen->move($ruta,$nombreimagen);


            $articulo->imagen = $nombreimagen;  
            
            
        }else{
            $articulo->imagen = $request->get('imagen1');
        }
        
        $articulo->cantidad = $request->get('cantidad');
        $articulo->categoria_id = $request->get('categoria_id');
        $articulo->talla = $request->get('talla');
        $articulo->color = $request->get('color');
        $articulo->save();

        return redirect('/articulos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $articulo = Articulo::find($id);        
        $articulo->delete();

        return redirect('/articulos');  
    }
}
