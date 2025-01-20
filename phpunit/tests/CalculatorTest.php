<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    public function testSub()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->sub(2, 1);
        $this->assertEquals(1, $result);
        $this->assertIsFloat($result);
    }

    public function testMul()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->mul(2, 3);
        $this->assertEquals(6, $result);
        $this->assertIsFloat($result);
    }

    public function testDiv(){
        $calculator = new \App\Calculator();
        $result = $calculator->div(6,2);
        $this->assertEquals(3, $result);
        $this->assertIsFloat($result);
    }

    public function testDiv_negative(){
        $calculator = new \App\Calculator();
        $result = $calculator->div(6,-2);
        $this->assertEquals(-3, $result);
        $this->assertIsFloat($result);
    }

    public function testPow(){
        $calculator = new \App\Calculator();
        $result = $calculator->pow(6,2);
        $this->assertEquals(36, $result);
        $this->assertIsFloat($result);
    }

    public function testPow_negative(){
        $calculator = new \App\Calculator();
        $result = $calculator->pow(10,-1);
        $this->assertEquals(0.1, $result);
        $this->assertIsFloat($result);
    }

    public function testSqrt(){
        $calculator = new \App\Calculator();
        $result = $calculator->sqrt(36);
        $this->assertEquals(6, $result);
        $this->assertIsFloat($result);
    }

    public function testSqrt_negative(){
        $calculator = new \App\Calculator();
        $result = $calculator->sqrt(-36);
        $this->assertNan($result);
    }

    function testSplitFloat(){
        $calculator = new \App\Calculator();
        $result = $calculator->splitFloat(54.35);
        $this->assertEquals(["left" => 54, "right" => 35], $result);
        $this->assertIsInt($result["left"]);
        $this->assertIsInt($result["right"]);
    }

    function testGenerateRandomCalculatorName(){
        $calculator = new \App\Calculator();
        $result = $calculator->generateRandomCalculatorName();
        $this->assertIsString($result);
    }
}
