<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class NewUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * Testing fake user and database reset after making user
     */
    use DatabaseTransactions;
    public function testExample()
    {
        $user = new User();
        $user->name = 'Nobody';
        $user->email='nobody@none.com';
        $user->password='password';
        $this->assertTrue($user->save());
        //$this->assertTrue(true);
    }
}
