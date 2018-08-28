<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    factory(Category::class,100)->create();
    factory(Post::class,100)->create();
    /*         
    */        

    }
}
