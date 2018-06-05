<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoControlador extends Controller
{
    public function index($hola)
    {
      return view ('/saludo/saludo');
    }
}
