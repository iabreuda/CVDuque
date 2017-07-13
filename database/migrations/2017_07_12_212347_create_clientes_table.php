<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->date("dt_nascimento");
            $table->string("nome", 50);
            $table->string("email", 100)->unique();
            $table->string("telefone", 10)->nullable();
            $table->string("celular", 11)->nullable();
            $table->string("cpf", 11)->unique();
            $table->string("cep", 8);
            $table->string("logradouro", 250);
            $table->string("numero", 5);
            $table->string("complemento", 50)->nullable();
            $table->string("bairro", 100);
            $table->string("estado", 100);
            $table->string("municipio", 100);
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
}
