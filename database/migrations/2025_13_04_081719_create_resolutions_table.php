<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->string('n_resolucion')->unique();

            $table->date('fecha')->nullable();
            $table->integer('n_persona')->nullable();
            $table->mediumtext('accion')->nullable();

            $table->string('file')->nullable();

            $table->enum('notificado',['NO NOTIFICADO','NOTIFICADO'])->default('NO NOTIFICADO');
            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');

            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
            
            $table->foreign('order_id')->references('id')->on('orders')
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
        Schema::dropIfExists('resolutions');
    }
}
