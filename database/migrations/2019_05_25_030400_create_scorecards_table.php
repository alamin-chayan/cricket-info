<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScorecardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('details');
            $table->unsignedInteger('match_id');
            $table->enum('innings', ['1st', '2nd']);
            $table->unsignedSmallInteger('over');
            $table->unsignedTinyInteger('boll');
            $table->unsignedBigInteger('bowler_id');
            $table->unsignedBigInteger('batsman_id');
            $table->unsignedSmallInteger('run');
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matched')->onDelete('cascade');
            $table->foreign('bowler_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('batsman_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scorecards');
    }
}
