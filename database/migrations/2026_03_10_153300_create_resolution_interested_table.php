<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolutionInterestedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  /*   public function up()
    {
        Schema::create('resolution_interested', function (Blueprint $table) {
            $table->increments('id');
            
        });
    } */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resolution_interested');
    }
}
