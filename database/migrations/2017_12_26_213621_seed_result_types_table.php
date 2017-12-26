<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedResultTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $resultTypes = [
            ['name' => 'Won'],
            ['name' => 'Lost'],
            ['name' => 'Draw'],
            ['name' => 'No result']
        ];

        DB::table('result_types')->insert($resultTypes);
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
