<?php

use Illuminate\Database\Seeder;
use DB;

class UsersTableAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $user = ['name' => 'admin','email' => 'admin@admin.com','password' => bcrypt('qweasd')];
        $db = DB::table('users')->insert($user);
    }
}
