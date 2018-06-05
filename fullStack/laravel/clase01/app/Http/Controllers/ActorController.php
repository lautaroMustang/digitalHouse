<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory​()
    {
      $actores = Actor::all();
      //dd($actores); tipo vardump + exit
      return view('actores', compact('actores'));
    }
}
