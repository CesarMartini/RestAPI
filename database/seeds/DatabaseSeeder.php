<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 15)->create();
        factory(\App\Models\Dados::class, 20)->create();
        //factory(\App\Models\Fornecedor::class, 10)->create();
        //factory(\App\Models\Cliente::class, 10)->create();
        //factory(\App\Models\Produto::class, 10)->create();
        //factory(\App\Models\Eventos::class, 20)->create();
    }
}
