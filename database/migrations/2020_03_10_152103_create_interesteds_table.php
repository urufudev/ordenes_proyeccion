<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesteds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni')->unique()->nullable();
            $table->string('name');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            /* $table->string('slug'); */
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
        Schema::dropIfExists('interesteds');
    }
}
