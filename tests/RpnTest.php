<?php

require 'Classes/Rpn.php';
use Classes\Rpn;
use PHPUnit\Framework\TestCase;

class RpnTest extends TestCase
{
    private $rpn;

    protected function setUp()
    {
        $this->rpn = new Rpn;
    }

    protected function tearDown()
    {
        $this->rpn = null;
    }

    public function testExpression1()
    {
        $result = $this->rpn->calculateResult("5 1 2 + 4 * + 3 -");
        $this->assertEquals(14, $result);
    }

    public function testExpression2()
    {
        $result = $this->rpn->calculateResult("3 2 +");
        $this->assertEquals(5, $result);
    }

    public function testExpression3()
    {
        $result = $this->rpn->calculateResult("2 5 + 3 *");
        $this->assertEquals(21, $result);
    }

}