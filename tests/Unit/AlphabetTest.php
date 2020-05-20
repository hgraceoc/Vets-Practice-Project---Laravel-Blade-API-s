<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Alphabet;

class AlphabetTest extends TestCase
{
    private $letter;

    public function setUp() : void 
    {
        parent::setUp();
        $this->letter = new Alphabet();
    }

    public function test_a()
    {
        $this->assertSame("!", $this->letter->forLetter("a"));
    }

}

// public function testFull()
// {
//     $cracker = new Cracker("! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o");
//     $this->assertSame("hello mum", $cracker->decrypt("&£aad bjb"));
// }