<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function($table){
            $table->increments('id');
            $table->string('title');
            $table->string('username');
            $table->integer('gender');
            $table->string('email');
            $table->text('content');
            $table->unsignedInteger('comment_count');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('posts');
    }
}
