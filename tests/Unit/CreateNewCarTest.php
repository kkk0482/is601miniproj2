<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Cars;
use App\User;

class CreateNewCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testExample()
    {
        //$this->assertTrue(true);
        $cars = factory(User::class, 1)
            ->create()
            ->each(function ($u) {
                $u->cars()->save(factory(Cars::class)->make());
                $this->assertTrue($u->save());
            });
    }
}
