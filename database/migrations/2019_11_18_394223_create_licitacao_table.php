<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicitacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacao', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('edital');
            $table->integer('numeracao');

            $table->date('data_criacao');
            $table->date('data_publicacao');
            $table->date('data_abertura');
            $table->time('hora_criacao');
            $table->time('hora_abertura');

            $table->string('objeto', 300)->nullable($value = true);
            $table->string('local_entrega',200)->nullable($value = true);
            $table->string('prazo_entrega',200)->nullable($value = true);
            $table->string('condicoes_pagamento',200)->nullable($value = true);
            $table->string('validade_proposta',200)->nullable($value = true);
            $table->string('processo_administrativo',50)->nullable($value = true);
            $table->string('file_edital',50)->nullable($value = true);

            // foreign key
            $table->unsignedBigInteger('id_modalidade');
            $table->foreign('id_modalidade')->references('id')->on('modalidade');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            // //locao de licitacao
            $table->unsignedBigInteger('id_local');
            $table->foreign('id_local')->references('id')->on('local');

            $table->unsignedBigInteger('id_comissao');
            $table->foreign('id_comissao')->references('id')->on('comissao');
            // fim foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('licitacao');
    }
}
