<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestedResolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interested_resolution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resolution_id')->unsigned();
            $table->integer('interested_id')->unsigned();
            $table->timestamps();


            $table->foreign('resolution_id')->references('id')->on('resolutions')
            ->onUpdate('cascade');

            $table->foreign('interested_id')->references('id')->on('interesteds')
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
        Schema::dropIfExists('interested_resolution');
    }
}
