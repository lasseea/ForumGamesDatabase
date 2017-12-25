<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('slot_number');
            $table->unsignedInteger('team_id');
            $table->string('role_name');
            $table->unsignedInteger('end_status_id');
            $table->unsignedInteger('end_day');
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('end_status_id')->references('id')->on('player_slot_end_statuses')->onDelete('cascade');

            $table->unique(['game_id', 'slot_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_slots');
    }
}
