<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Split::class, function (Faker $faker) {
    return [
        'division' => 'América del Sur'
    ];
});
