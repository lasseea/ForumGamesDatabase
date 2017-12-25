<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerPlayerSlotRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_player_slot_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_slot_id');
            $table->unsignedInteger('player_id');
            $table->timestamps();

            $table->foreign('player_slot_id')->references('id')->on('player_slots')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');

            $table->unique(['player_slot_id', 'player_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_player_slot_relations');
    }
}
