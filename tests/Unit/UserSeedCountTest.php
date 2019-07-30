<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserSeedCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserSeedCountTest()
    {
        //$this->assertTrue(true);
        $users = User::All();
        $userCount = $users->count();
        //dd($userCount);
        $this->assertIsInt($userCount);
        $this->assertLessThanOrEqual(50,$userCount);
    }
}
