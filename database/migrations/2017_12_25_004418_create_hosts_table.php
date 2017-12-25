<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('host_type_id');
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('host_type_id')->references('id')->on('host_types')->onDelete('cascade');

            $table->unique(['game_id', 'host_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosts');
    }
}
