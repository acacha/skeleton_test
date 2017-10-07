<?php

use Acacha\Skeleton1\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'completed' => $faker->boolean
    ];
});

// factory('App\Task');
