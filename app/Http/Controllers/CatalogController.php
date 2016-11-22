<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{


  function getHome(){
    return redirect()->action('CatalogController@getIndex');
  }

  function getIndex(){
    $movies = Movie::all();
    return view('catalog.index',['arrayPeliculas'=>$movies]);
  }

  function getShow($id){
    return view('catalog.show',['pelicula' => Movie::findOrFail($id)]);
  }

  function getCreate(){
    return view('catalog.create');
  }

  function getEdit($id){
    return view('catalog.edit',['pelicula'=>Movie::findOrFail($id)]);
  }

}
