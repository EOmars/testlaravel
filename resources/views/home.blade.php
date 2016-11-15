@extends('layouts.master')

@section('menu')
  Este es el padre  <br>

  @parent
@endsection

@section('content')
  Este es el yield


@stop
