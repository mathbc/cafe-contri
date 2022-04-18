<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nome');
            $table->string('marca');
            $table->integer('quantidade');
            $table->boolean('ativo')->default('1');
            $table->enum('tipo_cobranca', ['POR_UNIDADE', 'POR_QUILO']);
            $table->float('preco');
            $table->text('descricao');
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
        Schema::dropIfExists('produto');
    }
};
