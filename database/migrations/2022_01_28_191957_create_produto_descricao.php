<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoDescricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_descricao', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produto_id');
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::table('produto_descricao', function (Blueprint $table) {
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
        Schema::dropIfExists('produto_descricao');
    }
}
