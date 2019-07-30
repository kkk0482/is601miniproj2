<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeleteUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeleteUserTest()
    {
        //$this->assertTrue(true);
        $user = User::inRandomOrder()->first();
        $user->delete();
        $this->assertTrue(true);
    }
}
