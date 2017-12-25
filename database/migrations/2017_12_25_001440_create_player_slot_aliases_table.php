<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerSlotAliasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_slot_aliases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_slot_id');
            $table->string('alias');
            $table->timestamps();

            $table->foreign('player_slot_id')->references('id')->on('player_slots')->onDelete('cascade');
            $table->unique(['player_slot_id', 'alias']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_slot_aliases');
    }
}
