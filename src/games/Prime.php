<?php
namespace BrainGames\Prime;

use BrainGames\Engine;

function prime()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $funcName = 'BrainGames\Prime\checkPrime';
    Engine\engine($rule, $funcName);
    return;
}
function checkPrime()
{
    $rNum = rand(1, 100);
    $qa = [];
    $qa['qwestion'] = $rNum;

    if (isPrime($rNum)) {
        $qa['answer'] = "yes";
    } else {
        $qa['answer'] = "no";
    }
    return $qa;
}
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    $numHalf = sqrt($num);
    for ($i = 2; $i <= $numHalf; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;

    return ($number % 2 == 0) ? true : false;
}
