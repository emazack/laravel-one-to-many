<?php

//  una categoria (impiegato) -> tanti post (mansioni)

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table ->string('name');
            $table ->mediumText('description');
            $table ->date('deadline');
            // nella categoria many abbiamo bisogno della chiave esterna. in questo caso ci sono due categorie impiegati e compiti. one to many. quindi in questa categoria compiti va la ta foreign key
            // per collegare due tabelle con una foreign keys abbiamo bisogno di avere un dato che le correli (che hanno in comune). potrebbe essere ad esempio l'id.
            // Abbiamo tecnicamente bisogno di un dato che sia type: bigint e che abbia un attributo UNSIGNED. Motivo per il quale:
            // l'index ci aiuta nelle ricerche e si aggiunge per velocizzare il lavoro che fa laravel
            $table -> bigInteger('task_id') -> unsigned() -> index();
            // si crea poi una terza migration che servirà per buttare giù il database e/o modificarlo per bene. Questo viene fatto perchè se si prova a cancellare il database così com'è col fatto che d'ora in poi saranno relazionati i due database, risulterà impossibile cancellare per via della presenza della foreign key. Essa gestisce solo le chiavi esterne, le mette su e le elimina, ha solo questa funzione.



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
