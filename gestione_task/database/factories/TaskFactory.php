<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// ci mettiamo il nome task
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker -> word(),
        'description' => $faker -> sentence(),
        'deadline' => $faker -> date()
    ];
});
