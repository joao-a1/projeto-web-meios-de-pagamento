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
            $table->string('nome', 200)->nullable();
            $table->string('cpf', 14);
            $table->string('telefone', 15)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('senha', 100)->nullable();
            $table->string('n_conta', 10)->nullable();
            $table->double('saldo', 20, 2);
            $table->unsignedBigInteger('id_cidade')->nullable();

            $table->foreign('id_cidade')->references('id')->on('cidades');
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