<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('boards')->insert([
            'title' => 'Title',
            'body' => 'This is the body message1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
