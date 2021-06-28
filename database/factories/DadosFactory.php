<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Dados;
use Faker\Generator as Faker;

$factory->define(Dados::class, function (Faker $faker) {
    return [
        'cod_fornecedor' => strval($faker->unique()->numerify('#####')),
        'cod_prod' => strval($faker->unique()->numerify('#####')),
        'cliente' => $faker->name(),
        'documento' => strval($faker->unique()->numerify('###########')),
        'nome_prod' => $faker->name(),
        'nome_categoria' => $faker->word(),
        'nome_fornecedor' => $faker->name(),
        'valor_original' => strval($faker->randomFloat(2,0,9999999)),
        'data_compra' => $faker->date(),
        'valor_desconto' => strval($faker->randomFloat(2,0,0.99)),
        'valor_final' => strval($faker->randomFloat(2,0,9999999)),
        'data_pgto' => $faker->date(),
        'data_devolucao' => $faker->date(),
        'status_situacao' => $faker->word(),
        'status_pgto' => $faker->word(),
        'taxa_aplicada' => strval($faker->randomFloat(2,0,1)),
        'taxa_original' => strval($faker->randomFloat(2,0,1)),
    ];
});
