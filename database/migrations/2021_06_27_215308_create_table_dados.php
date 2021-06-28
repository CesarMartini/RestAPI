<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cod_fornecedor');
            $table->string('cod_prod');
            $table->string('cliente');
            $table->string('documento');
            $table->string('nome_prod');
            $table->string('nome_categoria');
            $table->string('nome_fornecedor');
            $table->string('valor_original');
            $table->string('data_compra');
            $table->string('valor_desconto');
            $table->string('valor_final');
            $table->string('data_pgto');
            $table->string('data_devolucao');
            $table->string('status_situacao');
            $table->string('status_pgto');
            $table->string('taxa_aplicada');
            $table->string('taxa_original');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados');
    }
}
