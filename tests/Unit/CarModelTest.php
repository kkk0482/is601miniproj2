<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarModelTest()
    {
        //$this->assertTrue(true);
        $car = Cars::inRandomOrder()->first();
        $this->assertIsString($car->model);
    }
}
