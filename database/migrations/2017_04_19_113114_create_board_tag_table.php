<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_tag', function(Blueprint $table){
            $table->integer('board_id')->unsigned()->index();
            $table->foreign('board_id')->references('id')->on('boards')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')
                    ->onDelete('cascade')->onUpdate('cascade');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('board_tag');
    }
}
