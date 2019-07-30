<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarSeedCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarSeedCountTest()
    {
        //$this->assertTrue(true);
        $cars = Cars::All();
        $carCount = $cars->count();
        //dd($userCount);
        $this->assertIsInt($carCount);
        $this->assertLessThanOrEqual(50,$carCount);
    }
}
