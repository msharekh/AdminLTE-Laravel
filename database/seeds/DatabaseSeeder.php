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
        
    factory(Category::class,10)->create();
    factory(Post::class,10)->create();
    /*         
    */        

    }
}
