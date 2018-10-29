<?php
/**
 * Created by PhpStorm.
 * User: regagim
 * Date: 29.10.18
 * Time: 23:53
 */

require_once 'init.php';


function calculator($num1, $num2, $operator){

    $result = 0;

    switch ($operator){
        case '+':
            $result = sum($num1, $num2);
            break;

        case '-':
            $result = sub($num1, $num2);
            break;

        case '*':
            $result = mult($num1, $num2);
            break;

        case '/':
            $result = div($num1, $num2);
            break;

    }
    return $result;
}

