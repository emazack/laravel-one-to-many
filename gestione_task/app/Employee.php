<?php

// category - ONE

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  // questa è la funzione solita che richiama la tabella della migration
    protected $table = 'employees';

    // qui stiamo dicendo che per ogni Employee ci sono tante tasks. Questo è il punto di vista della tabella employee
    public function tasks() {
      return $this -> hasMany(Task::class);
    }
}

// Post viene utilizzato per indicare la tabella che è "many"
//
