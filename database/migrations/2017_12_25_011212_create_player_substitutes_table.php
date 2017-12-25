<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerSubstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_substitutes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_out_id');
            $table->unsignedInteger('sub_out_player_id');
            $table->unsignedInteger('sub_in_player_id');
            $table->integer('day_of_sub');
            $table->timestamps();

            $table->foreign('sub_out_id')->references('id')->on('player_player_slot_relations')->onDelete('cascade');
            $table->foreign('sub_out_player_id')->references('id')->on('players')->onDelete('cascade');
            $table->foreign('sub_in_player_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_substitutes');
    }
}
