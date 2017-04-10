<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersTableSeeder::class);
        $this->command->info('The User table has been seeded!');
        $this->call(BoardsTableSeeder::class);
        $this->command->info('The Board table has been seeded!');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

class UsersTableSeeder extends Seeder {
	public function run() {
		App\User::truncate();
		factory(App\User::class,10)->create();
	}
}