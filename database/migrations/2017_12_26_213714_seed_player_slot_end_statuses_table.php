<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedPlayerSlotEndStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $playerSlotEndStatuses = [
            ['name' => 'Survived', 'alive' => 1],
            ['name' => 'Endgamed', 'alive' => 1],
            ['name' => 'Conceded', 'alive' => 1],
            ['name' => 'Lynched', 'alive' => 0],
            ['name' => 'Night killed by Mafia or Third Party', 'alive' => 0],
            ['name' => 'Night killed by Town', 'alive' => 0],
            ['name' => 'Day killed by Mafia or Third Party', 'alive' => 0],
            ['name' => 'Day killed by Town', 'alive' => 0],
            ['name' => 'Modkilled', 'alive' => 0],
            ['name' => 'In-Thread-Attack', 'alive' => 0],
            ['name' => 'Died in event', 'alive' => 0],
            ['name' => 'Suicide', 'alive' => 0],
        ];

        DB::table('player_slot_end_statuses')->insert($playerSlotEndStatuses);
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
