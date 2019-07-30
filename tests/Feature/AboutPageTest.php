<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AboutPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAboutPageTest()
    //public function testAbout()
    {
        //$response = $this->get('/');
        $user = User::first();
        $this->be($user);
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
}
