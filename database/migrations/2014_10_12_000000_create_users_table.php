<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isadm')->default(false);
            $table->boolean('banned')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('qweasd'),
            'isadm' => true,
        ));

        DB::table('users')->insert(
            array(
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('qweasd'),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
