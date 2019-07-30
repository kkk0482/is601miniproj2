<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarYearUpdateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $car = Cars::inRandomOrder()->first();
        $car->year = '2000';
        $car->save();
        $this->assertTrue($car->save());
    }
}
