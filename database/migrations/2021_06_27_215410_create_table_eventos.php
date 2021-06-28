<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_fornece')->index();
            $table->integer('cod_produto')->index();
            $table->integer('doc_cliente')->index();
            $table->float('valor_original');
            $table->date('data_compra');
            $table->float('valor_desconto');
            $table->float('valor_final');
            $table->date('data_pgto');
            $table->date('data_devolucao');
            $table->string('status_situacao');
            $table->string('status_pgto');
            $table->float('taxa_aplicada');
            $table->float('taxa_original');
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
        Schema::dropIfExists('eventos');
    }
}
