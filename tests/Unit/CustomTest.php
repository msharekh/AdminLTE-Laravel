<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function testIsConnected()
    {
        $isConnected=false;
        # code...
        if(DB::connection()->getDatabaseName()){
            $isConnected=true;
            echo "\nconnected sucessfully to database ";            
        }

        $this->assertTrue($isConnected);
    }

    public function testSeePostsTitle()
    {
        $word="Documentation";
        echo "\ncheck if there is this ".$word;
        $this->get('/')->assertSee($word);

     }
}
