<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('office_id')->unsigned();
            $table->integer('laboral_id')->unsigned();

            $table->string('name');
            $table->string('email',128)->unique();
            $table->string('password');
            $table->string('dni')->unique();
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('gender');
            $table->date('f_birth');
            $table->string('phone');

            $table->string('position');
           
            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');


            
            $table->rememberToken();
            $table->timestamps();

            //relaciones
            $table->foreign('office_id')->references('id')->on('offices')
                ->onUpdate('cascade');
            
            $table->foreign('laboral_id')->references('id')->on('laborals')
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
        Schema::dropIfExists('users');
    }
}
