<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro', function (Blueprint $table) {
            $table->bigIncrements('id')->onDelete('cascade');
            $table->string('nome');
            $table->string('numero_ato', 50);
            $table->integer('ano_ato');
            $table->date('data_designacao');

            // foreign key
            $table->string('cargo',50);
            $table->string('tipo_cargo',50);

            // $table->unsignedBigInteger('id_comissao');
            // $table->foreign('id_comissao')->references('id')->on('comissao');
            // foreign key

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
        Schema::dropIfExists('membro');
    }
}
