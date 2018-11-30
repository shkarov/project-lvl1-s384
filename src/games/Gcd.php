<?php
namespace BrainGames\Gcd;

use BrainGames\Engine;

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
function gcd()
{
    $argsForEngine = [];
    $argsForEngine["rule"] = 'Find the greatest common divisor of given numbers.';
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);
        $argsForEngine["question{$i}"] = "{$rNum1} {$rNum2}";
        $argsForEngine["answer{$i}"] = algEuclidian($rNum1, $rNum2);
    }
    Engine\engine($argsForEngine);
    return;
}
