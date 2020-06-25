<?php

//  ONE - CATEGORIA

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

// Quello che dobbiamo fare è riempire le varie colonne con tutte le colonne create nel create table, escludendo però quelle che contengono la relazione e quindi la foreign key


$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname' => $faker -> lastName(),
      'dateOfBirth' => $faker -> date(),
      'role' => $faker -> jobTitle()

    ];
});
