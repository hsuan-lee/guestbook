<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{

	public function run(){

	DB::table('posts')->delete(); 

	$faker = Faker::create('en_US');  
 		/*
        for ($i = 0; $i < 10; $i++) {  
            Post::create([
                'title' => $faker->sentence(),
                'username' => $faker->name(),
                'gender' => 1,
                'email' => $faker->email(),
                'content' => $faker->paragraph()
       
            ]);


            for ($j = 0; $j < 3; $j++) {  
            Comment::create([
                'commenter' => $faker->name(),
                'gender' => 1,
                'email' => $faker->email(),
                'comment' => $faker->paragraph()
                            ]);

            $post->comments()->save($comment);
			$post->increment('comment_count');
        	}


        }*/

        for( $i = 1 ; $i <= 20 ; $i++) {
		$post = new Post;
		$post->title = $faker->sentence();
		$post->username = $faker->name();
		$post->gender = 1;
		$post->email = $faker->email();
		$post->content = $faker->paragraph();
		
		$post->save();

		$maxComments = mt_rand(3, 15);
		for ($j=0; $j <= $maxComments; $j++) {
			$comment = new Comment;
			$comment->commenter = $faker->name();
			$comment->comment =  $faker->paragraph();

			
			$post->comments()->save($comment);
			$post->increment('comment_count');
		}
	}
    }


}
