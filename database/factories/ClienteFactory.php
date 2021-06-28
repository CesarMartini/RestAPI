<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente as Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nome_cliente' => $faker->name(),
        'documento' => $faker->unique()->numerify('###########'),
        'nome_categoria' => $faker->word()
    ];
});
