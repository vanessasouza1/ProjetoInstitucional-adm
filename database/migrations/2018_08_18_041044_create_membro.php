<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro', function(Blueprint $table){
            $table->increments('idMembro');
            $table->integer('idDepartamento')->unsigned();
            $table->index(['idDepartamento'], 'fk_departamento_membro');
            $table->string('nome');
            $table->string('funcao');


           // $table->primary('idMembro');


            $table->foreign('idDepartamento','fk_departamento_membro')
            ->references('idDepartamento')->on('departamento')
            ->onDelete('cascade');
            


            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro');
        //
    }
}
