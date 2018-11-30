<?php
namespace BrainGames\CheckParity;

use BrainGames\Engine;

function isParity($number)
{
    return ($number % 2 == 0) ? true : false;
}
function check()
{
    $argsForEngine = [];
    $argsForEngine["rule"] = 'Answer "yes" if number even otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $rNum = rand(1, 100);
        $argsForEngine["question{$i}"] = $rNum;
        if (isParity($rNum)) {
            $argsForEngine["answer{$i}"] = "yes";
        } else {
            $argsForEngine["answer{$i}"] = "no";
        }
    }
    Engine\engine($argsForEngine);
    return;
}
