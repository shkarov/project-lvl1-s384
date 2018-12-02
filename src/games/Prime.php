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
function isPrime($num, $counter = 2)
{
    if ($num < 2) {
        return false;
    }
    if ($num == 2) {
        return true;
    }
    if ($num % $counter == 0) {
        return false;
    }
    if ($counter <= round(sqrt($num))) {
        return isPrime($num, $counter + 1);
    } else {
        return true;
    }
}
