<?php

namespace Classes;

use Classes\GeneralMethods;
use Exception;

require_once 'GeneralMethods.php';

/**
 * Class OperatorNotImplementedException
 * Operator Not Implemented Exception
 */
class OperatorNotImplementedException extends Exception {

}

/**
 * Class Rpn
 * @package Classes
 */
class Rpn
{
    /**
     * @var \Classes\GeneralMethods
     */
    private $generalMethods;

    /**
     *
     */
    public function __construct()
    {

        $this->generalMethods = new GeneralMethods();

    }

    /**
     * calculateRpn
     *
     * Calculates the result of an expression in reverse polish notation
     * Supports +, -, *, / and %. Will support more operators.
     *
     * @param $rpnExp
     * @return mixed
     * @throws OperatorNotImplementedException, if the passed operator is not valid operator
     */
    function calculateRpn($rpnExp)
    {
        $stack = [];

        $rpnExpArray = explode(" ", $rpnExp);

        foreach ($rpnExpArray as $item) {
                if ($this->generalMethods->isNumber($item)) {
                    array_push($stack, $item);
                }
                else if ($this->generalMethods->isOperator($item)){

                    $op1 = array_pop($stack);
                    $op2 = array_pop($stack);
                    $result = 0;

                    switch ($item) {
                        case '+':
                            $result = $op1 + $op2;
                            array_push($stack, $result);
                            break;
                        case '-':
                            $result = $op1 - $op2;
                            array_push($stack, $result);
                            break;
                        case '*':
                            $result = $op1 * $op2;
                            array_push($stack, $result);
                            break;
                        case '/':
                            $result = $op1 / $op2;
                            array_push($stack, $result);
                            break;
                        case '%':
                            $result = $op1 % $op2;
                            array_push($stack, $result);
                            break;
                        default:
                            throw new OperatorNotImplementedException($item."Operator is not implemented.");
                    }//End of switch
                }//End of if
        }//end of foreach

        return array_pop($stack);
    }

    /**
     * calculateResult
     * Returns the result
     * @param $expression
     * @return mixed
     */
    function calculateResult($expression)
        {
           return $this->calculateRpn($expression);

        }
    }