<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Continent::class, function (Faker $faker) {
    return [
        'nameC' => 'América'
    ];
});
