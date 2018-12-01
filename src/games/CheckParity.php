<?php
namespace BrainGames\CheckParity;

use BrainGames\Engine;

function check()
{
    $rule = 'Answer "yes" if number even otherwise answer "no".';
    $funcName = 'BrainGames\CheckParity\logicParity';
    Engine\engine($rule, $funcName);
    return;
}
function logicParity()
{
    $rNum = rand(1, 100);
    $qa = [];
    $qa['qwestion'] = $rNum;

    if (isParity($rNum)) {
        $qa['answer'] = "yes";
    } else {
        $qa['answer'] = "no";
    }
    return $qa;
}
function isParity($number)
{
    return ($number % 2 == 0) ? true : false;
}
