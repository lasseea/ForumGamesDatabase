<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedGameTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $gameTypes = [
            ['name' => 'Open'],
            ['name' => 'Semi-closed'],
            ['name' => 'Closed'],
            ['name' => 'Bastard'],
        ];

        DB::table('game_types')->insert($gameTypes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
