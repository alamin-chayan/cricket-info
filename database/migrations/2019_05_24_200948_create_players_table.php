<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('bio')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->unsignedSmallInteger('playing_role_id')->nullable();
            $table->unsignedSmallInteger('batting_style_id')->nullable();
            $table->unsignedSmallInteger('bowling_style_id')->nullable();
            $table->unsignedSmallInteger('fielding_position_id')->nullable();
            $table->timestamps();

            $table->foreign('playing_role_id')->references('id')->on('playing_roles')->onDelete('set null');
            $table->foreign('batting_style_id')->references('id')->on('batting_styles')->onDelete('set null');
            $table->foreign('bowling_style_id')->references('id')->on('bowling_styles')->onDelete('set null');
            $table->foreign('fielding_position_id')->references('id')->on('fielding_positions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
