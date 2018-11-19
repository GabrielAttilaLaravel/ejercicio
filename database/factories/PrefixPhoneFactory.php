<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\PrefixPhone::class, function (Faker $faker) {
    return [
        'prefix' => '+58',
    ];
});
