<?php

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
            $table->string('nome',60);
            $table->string('cpf',14)->nullable();
            $table->string('rg',14)->nullable();
            $table->string('endereco',60)->nullable();
            $table->string('numero',10)->nullable();
            $table->string('compl',20)->nullable();
            $table->string('cidade',60)->nullable();
            $table->string('bairro',60)->nullable();
            $table->string('estado',2)->nullable();
            $table->string('cep',8)->nullable();
            $table->string('telefone',20)->nullable();
            $table->date('nasc')->nullable();
            $table->string('email',60)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('clientes');
    }
}
