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
            $table->string('RazaoSocial')->unique();
            $table->string('NomeFantasia');
            $table->string('CNPJ');
            $table->string('CPF');
            $table->string('IE');
            $table->string('Telefone');
            $table->string('Email');
            $table->string('WebSite');
            $table->string('Endereco');
            $table->string('Contato');
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
