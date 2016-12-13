<?php

use Illuminate\Database\Seeder;

class ArticlessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => '1',
            'title' => 'First user article',
            'content' => 'This is simple article. Generated by seed.',
        ]);
    }
}
