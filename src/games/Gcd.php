<?php
namespace BrainGames\Gcd;

use BrainGames\Engine;

function gcd()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $funcName = 'BrainGames\Gcd\logicGcd';
    Engine\engine($rule, $funcName);
    return;
}
function logicGcd()
{
    $rNum1 = rand(1, 100);
    $rNum2 = rand(1, 100);
    $qa = [];
    $qa['qwestion'] = "{$rNum1} {$rNum2}";
    $qa['answer'] = algEuclidian($rNum1, $rNum2);
    return $qa;
}
function algEuclidian($num1, $num2)
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return $num1;
}
