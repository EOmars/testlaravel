@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Modificar pelicula
			</div>

			<div class="panel-body" style="padding:30px">

				<form class="" action="" method="post">
          {{method_field('PUT')}}
				  {{ csrf_field() }}

    				<div class="form-group">
    					<label for="title">Título</label>
    					<input type="text" name="title" id="title" class="form-control" value="{{$pelicula->title}}">
					</div>

					<div class="form-group">
            <label for="year">A&ntilde;o</label>
            <input type="date" name="year" id="year" class="form-control" value="{{$pelicula->year}}">
					</div>

					<div class="form-group">
						<label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control" value="{{$pelicula->director}}">
					</div>

					<div class="form-group">
						<label for="poster">Poster</label>
            <input type="url" name="poster" id="poster" class="form-control" value="{{$pelicula->poster}}">
					</div>

					<div class="form-group">
						<label for="synopsis">Resumen</label>
    					<textarea name="synopsis" id="synopsis" class="form-control" rows="3" >{{$pelicula->synopsis}}</textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Guardar película
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>

@stop
