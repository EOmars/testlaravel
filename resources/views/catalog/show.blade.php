@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-sm-4">
      <a href="{{ $pelicula['poster'] }}">
        <img src="{{ $pelicula['poster']}}"/>
      </a>

    </div>

    <div class="col-sm-8">
      <h1>{{$pelicula['title']}}</h1>
      {{$pelicula['year']}} - {{$pelicula['director']}} <br><br>
      {{$pelicula['synopsis']}} <br>
      @if($pelicula['rented'])
        <h1>Película disponible:</h1>
        <button type="button" name="boton-alquilar" class="btn btn-success">Alquilar película</button>
      @else
        <h4>Película actualmente alquilada</h4>
        <button type="button" name="boton-devolver" class="btn btn-danger">Devolver película</button>
      @endif

      <button type="button" name="boton-editar" class="btn btn-info">Editar pelicula</button>
      <a href="{{url('catalog/')}}" class="btn btn-success">Volver al listado</a>


    </div>

  </div>



@stop
