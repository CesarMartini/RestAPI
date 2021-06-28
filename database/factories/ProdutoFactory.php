<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'cod_prod' => $faker->unique()->numerify('#####'),
        'nome_prod' => $faker->name(),
    ];
});
