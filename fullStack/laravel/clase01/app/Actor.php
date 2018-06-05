<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
//  protected $connection = 'mysql2'; // indica que data base en database.php
  public function getNombreCompleto()
  {
      return $this->first_name.' '. $this->last_name;
  }

}
