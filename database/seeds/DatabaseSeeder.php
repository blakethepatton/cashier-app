<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //clear the current tables
    	DB::table('users')->delete();
    	DB::table('posts')->delete();

        //seed posts
    	factory(App\Post::class, 8)->create();
        //create a user we can login with

    	user::create([
    		'name'	=> 'Example User',
    		'email' => 'user@example.com',
    		'password' => bcrypt('password'),
    	]);
        //

    }
}
