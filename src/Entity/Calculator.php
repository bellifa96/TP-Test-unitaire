<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{
    /**
     * @Assert\Type("integer")
     */
    public $firstNumber;

    /**
     * @Assert\Type("integer")
     */
    public $secondNumber;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide"})
     */
    public $operand;

    /**
     * @return integer
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param integer $firstNumber
     */
    public function setFirstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return integer
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param integer $secondNumber
     */
    public function setSecondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * @return integer
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * @param integer $operand
     */
    public function setOperand($operand)
    {
        $this->operand = $operand;
    }

    public function calculation()
    {
        switch ($this->getOperand())
        {
            case "add":
                $result = $this->getFirstNumber() + $this->getSecondNumber();
                break;
            case "subtract":
                $result = $this->getFirstNumber() - $this->getSecondNumber();
                break;
            case "multiply":
                $result = $this->getFirstNumber() * $this->getSecondNumber();
                break;
            case "divide":
               if ($this->getSecondNumber() != 0) {
                    $result = $this->getFirstNumber() / $this->getSecondNumber();
               } else {
                   $result = null;
               }
                break;
            default:
               $result = null;
         }

        return $result;

    }
}
