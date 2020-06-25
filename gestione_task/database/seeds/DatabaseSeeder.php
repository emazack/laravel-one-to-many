<?php

// Nel database seeder è il file che lancia la creazioni dei vari faker. Esso li lancia in ordine ed ovviamente se abbiamo delle relazioni l'ordine diventa importante.
// In questo caso bisogna lanciare prima l'employees perchè è la tabella tasks che si riferisce ad essa, e senza la tabella employees, tasks non può esistere.

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          EmployeesSeeder::class,
          TasksSeeder::class
        ]);
    }
}
