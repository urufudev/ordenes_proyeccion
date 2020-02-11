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


            $table->string('name');
            $table->string('email',128)->unique();
            $table->string('password');
            $table->string('dni')->unique();
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('gender');
            $table->string('f_birth');
            
            $table->string('position');
            $table->enum('regime',['DECRETO LEGISLATIVO N° 276','DECRETO LEGISLATIVO N° 1057',
            'LEY N° 29944','LEY N° 30512','LEY N° 30328','LEY N° 30493'])->default('DECRETO LEGISLATIVO N° 276');
            $table->string('phone');
            $table->enum('status',['ACTIVO','INACTIVO'])->default('ACTIVO');


            
            $table->rememberToken();
            $table->timestamps();

            //relaciones
            $table->foreign('office_id')->references('id')->on('offices')
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
