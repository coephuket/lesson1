<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    public function run()
    {
    	// DB::table('boards')->delete();
    	// $boards = [
    	// 	[ 'title' => 'Title1',
    	// 		'body' => 'Body1',],
    	// 	[ 'title' => 'Title2',
    	// 		'body' => 'Body2',],
    	// 	[ 'title' => 'Title3',
    	// 		'body' => 'Body3',],    			
    	// ];
	    
	    // foreach ($boards as $board) {
	    // 	App\Board::create($board);
	    // } 
    	App\Board::truncate();
    	factory(App\Board::class,15)->create();

    }
}
