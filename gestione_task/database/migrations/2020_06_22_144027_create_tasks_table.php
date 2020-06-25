<?php

// MANY - POST

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
            // nella categoria many abbiamo bisogno della chiave esterna. in questo caso ci sono due categorie: employees e tasks. one to many. quindi in questa categoria compiti (MANY) va la foreign key
            // per collegare due tabelle con una foreign keys abbiamo bisogno di un dato che le correli. potrebbe essere ad esempio l'id. Infatti quello che facciamo è correlare l'id della tabella employees con la ferign key di questa tabella (la task)
            // Abbiamo tecnicamente bisogno di un dato che sia type: bigint e che abbia un attributo UNSIGNED. Motivo per il quale:

            $table -> bigInteger('employee_id') -> unsigned() -> index();
            // l'index ci aiuta nelle ricerche e si aggiunge per velocizzare il lavoro che fa laravel

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
