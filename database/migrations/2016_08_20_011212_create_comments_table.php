<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function($table){
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->string('commenter');
            $table->integer('gender');
            $table->string('email');
            $table->text('comment');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('comments');
    }
}
