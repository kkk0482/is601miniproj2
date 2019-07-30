<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarYearIntTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarYearIntTest()
    {
        //$this->assertTrue(true);
        $car = Cars::find(30);
        /** @noinspection PhpDeprecationInspection */
        $this->assertInternalType('numeric',$car->year);
    }
}
