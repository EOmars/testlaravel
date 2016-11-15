<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ArrayPeliculas;

class CatalogController extends Controller
{


  function getHome(){
    return redirect()->action('CatalogController@getIndex');
  }

  function getIndex(){
    $peliculas = new ArrayPeliculas();
    $arrayPeliculas = $peliculas->getPeliculas();
    return view('catalog.index',['arrayPeliculas'=>$arrayPeliculas]);
  }

  function getShow($id){
    return view('catalog.show',['pelicula'=>(new ArrayPeliculas())->getPeliculas()[$id]]);
  }

  function getCreate(){
    return view('create');
  }

  function getEdit($id){
    return view('edit',['id'=>$id]);
  }

}
