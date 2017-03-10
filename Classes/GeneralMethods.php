<?php
/**
 * Class GeneralMethods
 * Class GeneralMethods is collection of general methods that are used  for identify the number or operator
 */

namespace Classes;
/**
 * Class GeneralMethods
 * @package Classes
 */
class GeneralMethods
{

    /**
     * isNumber
     * Identifies the parameter is number or not
     * @param $char
     * @return bool
     */
    function isNumber($char) {

        if (preg_match('/^[0-9]*$/', trim($char))) {

            return true;

        }

        return false;
    }

    /**
     * isOperator
     * Identifies the parameter is operator or not
     * @param $char
     * @return bool
     */
    function isOperator($char) {

        $operators = ['+', '-', '/', '*', '%'];

        if (in_array($char, $operators)) {

            return true;
        }

        return false;
    }

}
