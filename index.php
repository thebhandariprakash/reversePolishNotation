<?php

/*
 *Evaluate the value of an arithmetic expression in Reverse Polish Notation.
 * Valid operators are +, -, *, /. and %
 * Each operand may be an integer(number) or another expression.
 *examples :
 *array('3','2','+') ==>> (3 + 2) ==>> 2
 *array('2','5','+','3','*') ==>>  ((2 + 5) * 3) ==>> 21
*/


require_once 'Classes/Rpn.php';

use Classes\Rpn;

// expressions : Either one is used
$expression1 = "3 2 +";
$expression2 = "2 5 + 3 *";

//creating the instance of Rpm class
$rpn = new Rpn;

$result =  $rpn->calculateResult($expression2);

//output
echo "<h1>Reverse Polish Notation</h1>";

echo "Expression ==>>  ".$expression2. "<br/>";

echo "Result ==>> ".$result;

?>