<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function buscarPeliculaId($id)
    {
      $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
      return $peliculas[$id];
    }

    public function buscarPeliculaNombre($nombre)
    {
      $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
    foreach ($peliculas as $key => $value) {//podria ser un array_key_exists
      if (strtolower($nombre)==strtolower($value)) {
        return $value;
        }
      }
    return 'No se encontraron resultados';
    }

    public function index()
    {
      // $peliculas = [
      //   1 => "Toy Story",
      //   2 => "Buscando a Nemo",
      //   3 => "Avatar",
      //   4 => "Star Wars: Episodio V",
      //   5 => "Up",
      //   6 => "Mary and Max"
      // ];
      return view ('/peliculas/peliculas');//width ('peliculas',this->peliculas)
    }
}
