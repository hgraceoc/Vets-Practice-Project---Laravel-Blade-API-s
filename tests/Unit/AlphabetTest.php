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

    public function test_bang()
    {
        $this->assertSame("a", $this->letter->forLetter("!"));
    }

    // public function test_b()
    // {
    //     $this->assertSame(")", $this->letter->forLetter("b"));
    // }

    // public function test_c()
    // {
    //     $this->assertSame("#", $this->letter->forLetter("c"));
    // }

    // public function test_d()
    // {
    //     $this->assertSame("(", $this->letter->forLetter("d"));
    // }

    // public function test_e()
    // {
    //     $this->assertSame("£", $this->letter->forLetter("e"));
    // }

    // public function test_f()
    // {
    //     $this->assertSame("*", $this->letter->forLetter("f"));
    // }

    // public function test_g()
    // {
    //     $this->assertSame("%", $this->letter->forLetter("g"));
    // }

    // public function test_h()
    // {
    //     $this->assertSame("&", $this->letter->forLetter("h"));
    // }

    // public function test_i()
    // {
    //     $this->assertSame(">", $this->letter->forLetter("i"));
    // }

    // public function test_j()
    // {
    //     $this->assertSame("<", $this->letter->forLetter("j"));
    // }

    // public function test_k()
    // {
    //     $this->assertSame("@", $this->letter->forLetter("k"));
    // }

    // public function test_l()
    // {
    //     $this->assertSame("a", $this->letter->forLetter("l"));
    // }

    // public function test_m()
    // {
    //     $this->assertSame("b", $this->letter->forLetter("m"));
    // }

    // public function test_n()
    // {
    //     $this->assertSame("c", $this->letter->forLetter("n"));
    // }

    // public function test_o()
    // {
    //     $this->assertSame("d", $this->letter->forLetter("o"));
    // }

    // public function test_p()
    // {
    //     $this->assertSame("e", $this->letter->forLetter("p"));
    // }

    // public function test_q()
    // {
    //     $this->assertSame("f", $this->letter->forLetter("q"));
    // }

    // public function test_r()
    // {
    //     $this->assertSame("g", $this->letter->forLetter("r"));
    // }

    // public function test_s()
    // {
    //     $this->assertSame("h", $this->letter->forLetter("s"));
    // }

    // public function test_t()
    // {
    //     $this->assertSame("i", $this->letter->forLetter("t"));
    // }

    // public function test_u()
    // {
    //     $this->assertSame("j", $this->letter->forLetter("u"));
    // }

    // public function test_v()
    // {
    //     $this->assertSame("k", $this->letter->forLetter("v"));
    // }

    // public function test_w()
    // {
    //     $this->assertSame("l", $this->letter->forLetter("w"));
    // }

    // public function test_x()
    // {
    //     $this->assertSame("m", $this->letter->forLetter("x"));
    // }

    // public function test_y()
    // {
    //     $this->assertSame("n", $this->letter->forLetter("y"));
    // }

    // public function test_z()
    // {
    //     $this->assertSame("o", $this->letter->forLetter("z"));
    // }




}


