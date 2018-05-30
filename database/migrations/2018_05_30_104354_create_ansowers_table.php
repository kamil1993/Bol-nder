<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ansowers', function (Blueprint $table) {
            $table->integer('quistion_id')->unsigned();
            $table->foreign('quistion_id')->references('id')->on('quistions');
            $table->text('text');
            $table->timestamps();
            $table->increments('id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ansowers');
    }
}
