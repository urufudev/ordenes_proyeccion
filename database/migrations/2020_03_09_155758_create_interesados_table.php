<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resolution_id')->unsigned();

            $table->string('dni')->unique();
            $table->string('name');
            $table->string('ap_paterno');
            $table->string('ap_materno');

            $table->timestamps();


            $table->foreign('resolution_id')->references('id')->on('resolutions')
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
        Schema::dropIfExists('interesados');
    }
}
