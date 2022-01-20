<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Formato\Formato;

class Test01Test extends TestCase
{
    public function test01 () {
       $expected = false;
       $result = (new Formato())->apply(null);
       $this->assertEquals($result, $expected );
    }

    public function test02 () {
       $expected = false;
       $result = (new Formato())->apply("");
       $this->assertEquals($result, $expected );
    }

    public function test03 () {
       $expected = true;
       $result = (new Formato())->apply("44878956X");
       $this->assertEquals($result, $expected );
    }

    public function test04 () {
       $expected = false;
       $result = (new Formato())->apply("44878956x");
       $this->assertEquals($result, $expected );
    }

    public function test05 () {
       $expected = false;
       $result = (new Formato())->apply("0000000");
       $this->assertEquals($result, $expected );
    }

    public function test06 () {
       $expected = false;
       $result = (new Formato())->apply("X0000000");
       $this->assertEquals($result, $expected );
    }

    public function test07 () {
       $expected = false;
       $result = (new Formato())->apply("000X0000");
       $this->assertEquals($result, $expected );
    }

    public function test08 () {
       $expected = false;
       $result = (new Formato())->apply("00000000s");
       $this->assertEquals($result, $expected );
    }

    public function test09 () {
       $expected = false;
       $result = (new Formato())->apply("03200000s");
       $this->assertEquals($result, $expected );
    }

    public function test10 () {
       $expected = false;
       $result = (new Formato())->apply("0320000Ss");
       $this->assertEquals($result, $expected );
    }

    public function test11 () {
       $expected = false;
       $result = (new Formato())->apply("S");
       $this->assertEquals($result, $expected );
    }

    public function test12 () {
       $expected = false;
       $result = (new Formato())->apply("s");
       $this->assertEquals($result, $expected );
    }

    public function test13 () {
       $expected = false;
       $result = (new Formato())->apply("000c0000");
       $this->assertEquals($result, $expected );
    }

    public function test14 () {
        $expected = true;
        $result = (new Formato())->apply("68741024G");
        $this->assertEquals($result, $expected );
    }

    public function test15 () {
        $expected = true;
        $result = (new Formato())->apply("96731267Y");
        $this->assertEquals($result, $expected );
    }

    public function test16 () {
        $expected = true;
        $result = (new Formato())->apply("65973775T");
        $this->assertEquals($result, $expected );
    }

    public function test17 () {
        $expected = true;
        $result = (new Formato())->apply("01893995Z");
        $this->assertEquals($result, $expected );
    }

    public function test18 () {
        $expected = true;
        $result = (new Formato())->apply("12322160W");
        $this->assertEquals($result, $expected );
    }

    public function test19 () {
        $expected = true;
        $result = (new Formato())->apply("55491653J");
        $this->assertEquals($result, $expected );
    }
    
}
