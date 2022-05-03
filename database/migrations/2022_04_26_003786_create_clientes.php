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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->string('cpf', 14);
            $table->string('telefone', 15);
            $table->string('email', 30);
            $table->string('senha', 100);
            $table->string('n_conta', 10);
            $table->double('saldo', 20, 2);
            $table->unsignedBigInteger('id_cidade')->nullable();
            $table->unsignedBigInteger('id_saldo')->nullable();

            $table->foreign('id_cidade')->references('id')->on('cidades');
            $table->foreign('id_saldo')->references('id')->on('credito');
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
        Schema::dropIfExists('clientes');
    }
};
