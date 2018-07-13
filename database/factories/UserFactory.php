<?php

use App\Models\Role;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'), // secret
        // creamos el rol solo si no se perzonaliza, solamente con colocarlo dentro de un closer
        'role_id' => function(){
            return factory(Role::class)->create()->id;
        },
        'remember_token' => str_random(10),
    ];
});
