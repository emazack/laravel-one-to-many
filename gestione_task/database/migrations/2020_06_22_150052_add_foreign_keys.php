<?php

//si crea poi una terza migration che servirà per buttare giù il database e/o modificarlo per bene. Questo viene fatto perchè se si prova a cancellare il database così com'è col fatto che d'ora in poi saranno relazionati i due database, risulterà impossibile cancellare per via della presenza della foreign key. Essa gestisce solo le chiavi esterne, le mette su e le elimina, ha solo questa funzione.

 // tramite questo comando:
  //  php artisan make:migration add_foreign_keys

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tasks', function (Blueprint $table) {
        // dopo aver fatto tutto si da un: php artisan migrate:fresh
        // si va a scrivere quello che c'è scritto sempre solo che al posto di create scriviamo table e lo si va a rifereire:: a tasks che sarebbe la colonna "many". in qusto modo stiamo modificando una tabella e non creando
        Schema::table('tasks', function (Blueprint $table) {
          // qui stiamo creando la table che abbiamo scritto nell'altra migration (la forein key). Quindi gli diciamo a quale lavore ci stiamo riferendo "task_id". Il 'category' è un nome che stiamo dando alla key che ci servirà.
          $table -> foreign('task_id', 'category')
            // poi dobbiamo dire che ci stiamo riferendo al suo valore id task
            -> reference('id')
            // poi a quale migration ci stiamo riferendo
            -> on('tasks')
      });

    }


    /**
     * poi bisogna fare anche la down per eliminare eventualemnte le keys
     *
     * @return void
     */
    public function down()
    {
      // è uguale solo con poche differenze
      Schema::table('tasks', function (Blueprint $table) {
        // si aggiunge dropForeign che è una funzione che elimina la forein key e poi il nome che abbiamo assegnato precedentemente category.
        $table -> dropForeign('category')

      }
    }
}
