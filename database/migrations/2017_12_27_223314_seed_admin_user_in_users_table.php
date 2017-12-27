<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedAdminUserInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $adminUserID = (int) DB::table('users')->insertGetId(
            [
                'name'      => env('ADMIN_NAME'),
                'email'     => env('ADMIN_MAIL'),
                'password'  => bcrypt(env('ADMIN_PASS')),
            ]
        );
        $adminRoleID = (int) DB::table('user_roles')
            ->where('name', '=', 'Admin')
            ->pluck('id')
            ->first();

        DB::table('user_role_relations')->insert(
            ['user_id' => $adminUserID, 'user_role_id' => $adminRoleID]
        );
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
