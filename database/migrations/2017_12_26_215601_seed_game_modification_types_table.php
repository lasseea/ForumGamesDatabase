<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedGameModificationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $gameModificationTypes = [
            [
                'name' => 'Alias',
                'description' => 'All players had different names(accounts) than their regular ones, to achieve anonymity.'
            ],
            [
                'name' => 'Hydra',
                'description' => 'All player spots were shared by two or more players.'
            ],
            [
                'name' => 'ITAs',
                'description' => 'In-Thread-Attacks were included.'
            ],
            [
                'name' => 'Mafia Night Kill Assigned',
                'description' => 'Mafia night kills were assigned to a player, making it possible to roleblock/track/watch/etc.'
            ],
            [
                'name' => 'Night Talk in Game Thread',
                'description' => 'Players were allowed to talk in game thread during night phases.'
            ],
            [
                'name' => 'No Day Talk in Mafia Chat',
                'description' => 'Mafia players were not allowed to talk in mafia chat during day phases.'
            ],
            [
                'name' => 'Planned Events',
                'description' => 'Game included any kind of quizzes, mini-games, etc.'
            ],
        ];

        DB::table('game_modification_types')->insert($gameModificationTypes);
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
