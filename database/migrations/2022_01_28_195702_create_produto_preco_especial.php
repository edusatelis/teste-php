<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPrecoEspecial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_preco_especial', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco',10,2);
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->timestamps();
        });

        Schema::table('produto_preco_especial', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_preco_especial');
    }
}
