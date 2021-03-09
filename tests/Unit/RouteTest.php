<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    
    public function testRoute()
    {
        $response= $this->get("/register");
        $response->assertStatus(200);
    }
    public function testRouter()
    {
        $response= $this->get("/login");
        $response->assertStatus(200);
    }
    public function testEntry()
    {
        $response= $this->get("/");
        $response->assertStatus(200);
    }
    public function testAbout()
    {
        $response= $this->get("/about");
        $response->assertStatus(200);
    }
    

}
