<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\quistion;

class CreateQuistionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // hier wird eine Tabelle und die benötigten felder in der daten Bank defeniert 
        Schema::create('quistions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('text');
            $table->string('category');
            $table->string('language');
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
        Schema::dropIfExists('quistions');
    }
}
