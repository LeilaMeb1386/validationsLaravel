<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salle as Salle;
use App\Position as Position;
use App\Status as Status;

class View extends Controller
{
  public function home()
  {
return view('welcome');

  }
  public function salleList()
    {
      $salles = Salle::all();
      $positions = Position::all();
      $statuses = Status::all();
      return view('salleList', [
          'salles' => $salles,
          'positions' => $positions,
          'statuses' => $statuses,
      ]);
    }
    public function addSalles()
  {
    $positions = \App\Position::all();
    $statuses = \App\Status::all();
    return view ('salleList', [
      'positions' => $positions,
      "statuses" => $statuses,
    ]);
  }

}
