<?php

// posts - MANY

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // questa è la funzione solita che richiama la tabella della migration
    protected $table = 'tasks';
    // qui stiamo dicendo che per ogni task esiste solo un employee. Questo è il punto di vista della tabella tasks
    public function employee() {
      return $this -> belongsTo(Employee::class);
    }
}
