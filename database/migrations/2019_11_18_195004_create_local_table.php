<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalTable extends Migration
{

    public function up()
    {
        Schema::create('local', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_local');

            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('local');
    }
}
