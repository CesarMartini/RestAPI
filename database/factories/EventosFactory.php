<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Eventos;
use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(Eventos::class, function (Faker $faker) {
    return [
        'cod_fornece' => function() {
            return Fornecedor::all()->random();
        },
        'cod_produto' => function() {
            return Produto::all()->random();
        },
        'doc_cliente' => function() {
            return Cliente::all()->random();
        },
        'valor_original' => $faker->randomFloat(2,0,9999999),
        'data_compra' => $faker->date(),
        'valor_desconto' => $faker->randomFloat(2,0,0.99),
        'valor_final' => $faker->randomFloat(2,0,9999999),
        'data_pgto' => $faker->date(),
        'data_devolucao' => $faker->date(),
        'status_situacao' => $faker->word(),
        'status_pgto' => $faker->word(),
        'taxa_aplicada' => $faker->randomFloat(2,0,1),
        'taxa_original' => $faker->randomFloat(2,0,1),
    ];
});
