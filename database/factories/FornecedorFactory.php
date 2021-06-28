<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'cod_fornecedor' => $faker->unique()->numerify('#####'),
        'nome_fornecedor' => $faker->name(),
    ];
});
