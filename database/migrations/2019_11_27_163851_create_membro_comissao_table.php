<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembroComissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_comissao', function (Blueprint $table) {
            $table->unsignedBigInteger('id_membro');
            $table->foreign('id_membro')->references('id')->on('membro')->onDelete('cascade');

            $table->unsignedBigInteger('id_comissao');
            $table->foreign('id_comissao')->references('id')->on('comissao')->onDelete('cascade');
            // $table->unique('id_membro', 'id_comissao');
            $table->primary(['id_comissao', 'id_membro']);
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('membro_comissao');
    }
}
