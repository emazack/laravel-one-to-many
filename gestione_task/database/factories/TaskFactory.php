<?php

// MANY - POST


/** @var \Illuminate\Database\Eloquent\Factory $factory */
// ci mettiamo il nome task
use App\Task;
use Faker\Generator as Faker;

// Quello che dobbiamo fare è riempire le varie colonne con tutte le colonne create nel create table, escludendo però quelle che contengono la relazione e quindi la foreign key

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker -> word(),
        'description' => $faker -> sentence(),
        'deadline' => $faker -> date()
    ];
});
