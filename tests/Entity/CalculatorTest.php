<?php


namespace App\Tests\Entity;

use App\Entity\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

  public function testCalculator(){

    $calculator = new Calculator();
    $calculator->setFirstNumber(10);
    $calculator->setSecondNumber(21);
    $calculator->setOperand('add');

    $result = $calculator->calculation();
    $this->assertEquals(31,$result);
  }

  public function testSubtract(){
    $calculator = new Calculator();
    $calculator->setFirstNumber(10);
    $calculator->setSecondNumber(21);
    $calculator->setOperand('subtract');
    $result = $calculator->calculation();
    $this->assertEquals(-11,$result);
  }
  public function testMultiply(){
    $calculator = new Calculator();
    $calculator->setFirstNumber(10);
    $calculator->setSecondNumber(2);
    $calculator->setOperand('multiply');
    $result = $calculator->calculation();
    $this->assertEquals(20,$result);
  }
  public function testDivide(){
    $calculator = new Calculator();
    $calculator->setFirstNumber(10);
    $calculator->setSecondNumber(2);
    $calculator->setOperand('divide');
    $result = $calculator->calculation();
    $this->assertEquals(5,$result);
  }


}
