<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
  public function positions()
 {
    return $this->belongsToMany('App\Position');
 }
public function statuses()
 {
    return $this->belongsToMany('App\Status');
 }
}
