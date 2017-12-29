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
        $adminRoleID = (int) DB::table('roles')
            ->where('name', '=', env('ADMIN_ROLE_NAME'))
            ->pluck('id')
            ->first();

        DB::table('role_user')->insert(
            ['user_id' => $adminUserID, 'role_id' => $adminRoleID]
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
