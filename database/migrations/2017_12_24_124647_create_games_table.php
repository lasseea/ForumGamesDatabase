<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('community_id');
            $table->string('title');
            $table->string('game_thread_url')->nullable();
            $table->unsignedInteger('game_type_id');
            $table->boolean('turbo_format');
            $table->unsignedInteger('total_post_count');
            $table->text('description')->nullable();
            $table->unsignedInteger('day_length_in_minutes');
            $table->unsignedInteger('night_length_in_minutes');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();

            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
            $table->foreign('game_type_id')->references('id')->on('game_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
