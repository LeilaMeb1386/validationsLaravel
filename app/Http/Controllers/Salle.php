<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Salle extends Controller
{
  public function insertOne(Request $request)
{
      $salle = new \App\Salle;
      $salle->name = $request->input('name');
      $salle>save();
      $salle->posiitons()->attach($request->input('positions'));
      $salle->statuses()->attach($request->input('statuses'));
      return redirect('/salleList');
}
}
