<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Treatment;

class TreatmentTest extends TestCase
{
    use RefreshDatabase;

    public function testFromString()
    {
        $result = Treatment::fromString("Test");

        $this->assertInstanceOf(Treatment::class, $result);

        $this->assertSame("Test", $result->name);
    }

    public function testFromString2()
    {
        $result = Treatment::fromString("Bill");

        $this->assertInstanceOf(Treatment::class, $result);

        $this->assertSame("Bill", $result->name);
    }

    public function testFromString3() {
        $treatmentFromDB = Treatment::all()->first();

        $this->assertInstanceOf(Treatment::class, $treatmentFromDB);

        $this->assertSame("Test", $treatmentFromDB->name);
    }
}
