<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzklausosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzklausos', function (Blueprint $table) {
            $table->id();
            $table->text('puslapis');
            $table->string('vardas');
            $table->string('tel');
            $table->string('el_pastas');
            $table->text('uzklausa');
            $table->dateTime('created_at');
           
        });
    }
       
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uzklausos');
    }
}
