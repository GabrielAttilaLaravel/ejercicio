<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Pais::class, function (Faker $faker) {
    return [
        'nameP' => 'Venezuela',
        'name_short' => 've',
    ];
});
