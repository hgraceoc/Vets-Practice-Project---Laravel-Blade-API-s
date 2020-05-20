<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    
    public function setUp() : void
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }

    public function test1()
    {
        $this->assertSame("1", $this->fizzbuzz->forNumber(1));
    }
}
