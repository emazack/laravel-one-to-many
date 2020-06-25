<?php

//  ONE - CATEGORIA

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
// in questo file daremo istruzioni per creare effettivamente le righe delle colonne che abbiamo istruito nel factory e nel DatabaseSeeder

// in employees è semplice non cambia rispetto a che non ci fossero relazioni
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 50) -> create();
    }
}
