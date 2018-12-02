<?php
namespace BrainGames\Calc;

use BrainGames\Engine;

function calc()
{
    $rule = 'What is the result of the expression?';
    $funcName = 'BrainGames\Calc\calcArithmeticExpressin';
    Engine\engine($rule, $funcName);
    return;
}
function calcArithmeticExpressin()
{
    $arrSigns = array('+', '-', '*');
    $qa = [];
    $rNum1 = rand(1, 100);
    $rNum2 = rand(1, 100);
    $signIndex = array_rand($arrSigns);
    $sign = $arrSigns[$signIndex];
    $qa['qwestion'] = "{$rNum1} {$sign} {$rNum2}";
    $qa['answer'] = calculation($rNum1, $rNum2, $sign);
    return $qa;
}
function calculation($num1, $num2, $sign)
{
    switch ($sign) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
    }
}
