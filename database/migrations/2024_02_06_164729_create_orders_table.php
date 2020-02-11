<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('gestion_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('position_id')->unsigned();

            $table->integer('n_orden');
            $table->date('fecha');
            $table->string('n_expediente');
            $table->integer('folio');
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('o_plaza')->nullable();
            $table->string('d_plaza')->nullable();
            $table->string('lugar')->nullable();
            $table->string('distrito')->nullable();
            $table->string('provincia')->nullable();
            $table->mediumtext('accion')->nullable();
            $table->mediumtext('referencia')->nullable();
            $table->date('i_vigencia')->nullable();
            $table->date('f_vigencia')->nullable();

            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');


            $table->timestamps();


            //Relaciones

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('positions')
                ->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')
                ->onUpdate('cascade');
            $table->foreign('gestion_id')->references('id')->on('gestions')
                ->onUpdate('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')
                ->onUpdate('cascade');
                $table->foreign('year_id')->references('id')->on('years')
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
        Schema::dropIfExists('orders');
    }
}
