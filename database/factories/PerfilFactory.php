<?php

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(\App\Models\Perfil::class, function (Faker $faker) {
    return [
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        // creamos el usuario solo si no se perzonaliza, solamente con colocarlo dentro de un closer
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
    ];
});
