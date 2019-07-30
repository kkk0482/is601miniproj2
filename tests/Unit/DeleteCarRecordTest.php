<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Cars;

class DeleteCarRecordTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testDeleteCarRecordTest()
    {
        //$this->assertTrue(true);
        $car = Cars::inRandomOrder()->first();
        $car->delete();
        $this->assertTrue(true);
    }
}
