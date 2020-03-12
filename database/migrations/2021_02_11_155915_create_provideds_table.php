<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provideds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('regime_id')->unsigned();
            $table->integer('gestion_id')->unsigned();
            $table->integer('afp_id')->unsigned()->nullable();
            $table->integer('position_id')->unsigned();
            $table->integer('remunerative_id')->unsigned();
            $table->integer('workday_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->integer('level_id')->unsigned();
           
            
            $table->string('c_interno')->unique();

            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->enum('t_documento',['DNI','CE','PTP'])->default('DNI');
            $table->integer('n_documento');
            $table->date('f_nacimiento');
            $table->string('c_multired')->nullable();
            $table->string('cussp')->nullable();
            $table->mediumtext('estudios')->nullable();
            $table->string('n_expediente');
            $table->string('c_plaza');
            $table->mediumtext('motivo');
            $table->string('resolucion')->nullable();
            $table->date('i_contrato')->nullable();
            $table->date('f_contrato')->nullable();
            $table->string('referencia')->nullable();

            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');

            $table->timestamps();


             //Relaciones

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
            $table->foreign('regime_id')->references('id')->on('regimes')
                ->onUpdate('cascade');
            $table->foreign('gestion_id')->references('id')->on('regimes')
                ->onUpdate('cascade');
            $table->foreign('afp_id')->references('id')->on('afps')
                ->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('positions')
                ->onUpdate('cascade');
            $table->foreign('remunerative_id')->references('id')->on('remuneratives')
                ->onUpdate('cascade');
            $table->foreign('workday_id')->references('id')->on('workdays')
                ->onUpdate('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')
                ->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provideds');
    }
}
