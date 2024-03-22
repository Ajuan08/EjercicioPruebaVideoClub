<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mostrar Películas</title>
  </head>
  <body>
  @extends('layouts.master')
    @section('content')
    <div class="row">

    <div class="col-sm-4">
    <a href="{{ url('/catalog/show/' . $pelicula['titulo']) }}">
      <img src="{{ asset($pelicula['poster']) }}" style="height:200px"/>
      <h4 style="min-height:45px;margin:5px 0 10px 0">
          {{ $pelicula['titulo'] }}
      </h4>
    </a>
    </div>

    <div class="col-sm-8">
        <h2>{{ $pelicula['titulo'] }}</h2>
        <p><strong>Año:</strong> {{ $pelicula['ano'] }}</p>
        <p><strong>Director:</strong> {{ $pelicula['director'] }}</p>
        <p><strong>Resumen:</strong> {{ $pelicula['resumen'] }}</p>
        @if(isset($pelicula['rented']) && $pelicula['rented'])
            <p><strong>Estado:</strong> Película alquilada</p>
            <a href="#" class="btn btn-danger">Devolver película</a>
        @else
            <p><strong>Estado:</strong> Película disponible</p>
            <a href="#" class="btn btn-primary">Alquilar película</a>
        @endif
        <button onclick="window.location.href = '{{ url('/catalog/edit/' . $pelicula['titulo']) }}';" class="btn btn-warning">Editar película</button>
        <button onclick="window.location.href = '{{ url('/catalog') }}'"class="btn btn-secondary">Volver al listado</a>

    </div>

</div>
    @stop

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>