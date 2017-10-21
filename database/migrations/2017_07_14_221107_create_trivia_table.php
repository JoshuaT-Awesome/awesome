<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriviaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trivia', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('answer');
        $table->text('image');
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
        Schema::dropIfExists('trivia');
    }
}
