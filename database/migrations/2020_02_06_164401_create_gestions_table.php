<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_gestion');
            $table->string('n_resolucion');
            $table->string('s_direccion');
            $table->string('r_direccion');
            $table->string('s_secretaria');
            $table->string('r_secretaria');
            $table->string('s_administracion');
            $table->string('r_administracion');
            $table->string('s_dgi');
            $table->string('r_dgi');
            $table->string('s_dgp');
            $table->string('r_dgp');
            $table->string('s_personal');
            $table->string('r_personal');
            $table->string('s_finanzas');
            $table->string('r_finanzas');
            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');
            
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
        Schema::dropIfExists('gestions');
    }
}
