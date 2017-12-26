<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedHostTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $hostTypes = [
            ['name' => 'Main Host'],
            ['name' => 'Co-host'],
            ['name' => 'Substitute Host'],
        ];

        DB::table('host_types')->insert($hostTypes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
