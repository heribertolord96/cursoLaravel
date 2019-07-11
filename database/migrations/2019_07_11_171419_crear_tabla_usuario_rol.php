<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//Tabla usuario_rol
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_usuario_rol')
                ->references('id')
                ->on('rol')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        $table->foreign('usuario_id','fk_usuario_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('restrict')
                ->onUpdate('restrict');

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
        Schema::dropIfExists('usuario_rol');
    }
}
