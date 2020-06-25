<?php

// MANY - POST
// qui abbiamo bisogno di richiamare sia task che Employee

use App\Task;
use App\Employee;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
// in questo file daremo istruzioni per creare effettivamente le righe delle colonne che abbiamo istruito nel factory e nel DatabaseSeeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     // Qui bisognerà andare a valorizzare la foreign key, quella colonna che contiene la relazione.
    public function run()
    {
      // innanzitutto si fa un make() e non una create() in questo modo crea 100 elementi ma non li va a mettere nel database, si fà solo.
      factory(Task::class, 100)
                  -> make()
                  //
                  -> each(function($task) {
                    // in questo caso stiamo dicendo: prendi una variabile e a questa variabile assegna un Employee. Questo Employee viene preso dalla tabella Employee, il primo di una lista random (che  semplicemente tradotto significa che viene preso un valore a caso)
                    $employee = Employee::inRandomOrder() -> first();
                    // una volta preso il valore employee vado ad associare il $task definito prima all'employee
                    // employee viene dal model
                    $task -> employee() -> associate($employee);
                    // poi si salva il tutto perchè siamo in make(), bisogna salvare per immettere nel database
                    $task -> save();
      });
    }
}
