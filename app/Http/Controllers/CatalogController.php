<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
    
    public function getIndex()
{
    $arrayPeliculas = [
        [
            'titulo' => 'El Corredor del Laberinto',
            'ano' => 2017,
            'director' => 'Francisco Javier Gutiérrez',
            'resumen' => 'Se centra en escapar de un laberinto',
            'poster' => asset('imagenes/1.jpg'),
            'genero' => 'ficcion',
            'rented' => false,
        ],
        [
            'titulo' => 'Titanic',
            'ano' => 1997,
            'director' => 'James Cameron',
            'resumen' => 'Se hunde el barco',
            'poster' => asset('imagenes/2.jpg'),
            'genero' => 'romance',
            'rented' => true,
        ],
    ];
    
    return view('layouts.catalog.index', compact('arrayPeliculas'));
}

public function getShow($id)
{
    $arrayPeliculas = [
        [
            'titulo' => 'El Corredor del Laberinto',
            'ano' => 2017,
            'director' => 'Francisco Javier Gutiérrez',
            'resumen' => 'Se centra en escapar de un laberinto',
            'poster' => asset('imagenes/1.jpg'),
            'genero' => 'ficcion',
            'rented' => false,
        ],
        [
            'titulo' => 'Titanic',
            'ano' => 1997,
            'director' => 'James Cameron',
            'resumen' => 'Se hunde el barco',
            'poster' => asset('imagenes/2.jpg'),
            'genero' => 'romance',
            'rented' => true,
        ],
    ];

    $pelicula = $arrayPeliculas[$id];

    return view('layouts.catalog.show', compact('pelicula'));
}


    public function getCreate()
    {
        return view('layouts.catalog.create');
    }

    public function getEdit($id)
    {
        return view('layouts.catalog.edit', ['id' => $id]);
    }
}
