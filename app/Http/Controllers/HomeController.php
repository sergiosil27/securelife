<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function __invoke(){

        $categorias=Categoria::all();
        return view('home',['categorias'=>$categorias]);
    }
    
    public function servicios(){
        return view("services");
    }
    public function about(){

        return view("about");
    }
    public function checkout(){

        return view("checkout");
    }
    
    public function shop(){

        $articulos=Articulo::all();
        $categorias=Categoria::all();
        return view("shop",['articulos'=>$articulos,'categorias'=>$categorias]);
    }

    public function shop_single($id){

        $articulos = Articulo::Find($id);
        return view('shop_single',['articulos'=>$articulos]);
    }
    public function pqrs(){
        return view('pqrs');
    }
    public function mision_vision(){
        return view('mision-vision');
    }
    public function servicio(){
        return view('servicios');
    }
    public function info(){
        return view('info');
    }
}
