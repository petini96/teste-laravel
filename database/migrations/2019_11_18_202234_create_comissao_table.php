<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComissaoTable extends Migration
{

    public function up()
    {
        Schema::create('comissao', function (Blueprint $table) {
            $table->bigIncrements('id')->onDelete('cascade');
            $table->date('data');
            $table->string('portaria');
            $table->date('validade');
            $table->char('tipo_comissao');
            $table->string('arquivo')->nullable($value = true);
            $table->string('arquivo_atual')->nullable($value = true);


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comissao');
    }
}
