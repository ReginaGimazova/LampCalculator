<?php
/**
 * Created by PhpStorm.
 * User: rega
 * Date: 03.10.18
 * Time: 14:15
 */

function operation($num1, $num2, $operator){
    switch ($operator)
    {
        case '/':
            return $num1 / $num2;
            break;

        default:
            return 'operator not found';
    }
}

$result = 0;

if (isset($_POST['submit'])){
    $result = operation($_POST['num1'], $_POST['num2'], $_POST['oper']);
}

require '../templates/div.tmpl.php';
