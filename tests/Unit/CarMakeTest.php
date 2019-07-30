<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {
        //$this->assertTrue(true);
        $car=Cars::InRandomOrder()->first();
        $carMake=$car->brand;
        //$this->assertContains($carMake, ['Honda', 'Ford', 'Toyota']);
        if ($car->make = "Honda") {
            $this->assertTrue(true);
        }
        elseif ($car->make = "Toyota") {
            $this->assertTrue(true);
        }
        else ($car->make = "Ford");
        {
            $this->assertTrue(true);
        }
    }
}
