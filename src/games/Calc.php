<?php
namespace BrainGames\Calc;

use BrainGames\Engine;

function arithmetic($num1, $num2, $sign)
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
function calc()
{
    $arrSigns = array('+', '-', '*');
    $argsForEngine = [];
    $argsForEngine["rule"] = 'What is the result of the expression?';
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);
        $signIndex = array_rand($arrSigns);
        $sign = $arrSigns[$signIndex];
        $argsForEngine["question{$i}"] = "{$rNum1} {$sign} {$rNum2}";
        $argsForEngine["answer{$i}"] = arithmetic($rNum1, $rNum2, $sign);
    }
    Engine\engine($argsForEngine);
    return;
}
