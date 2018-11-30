<?php
namespace BrainGames\Progression;

use BrainGames\Engine;

function createArray($rNumStart, $rNumAdd)
{
    $arr = [];
    $arr[0] = $rNumStart;
    for ($i = 1; $i < 10; $i++) {
        $arr[$i]  = $arr[$i - 1] + $rNumAdd;
    }
    return $arr;
}
function createStrProgress($arr, $numHidden)
{
    $strProgress = "";
    foreach ($arr as $key => $value) {
        if ($key !== $numHidden) {
            $strProgress .= " {$value}";
        } else {
            $strProgress .= " ..";
        }
    }
    return $strProgress;
}
function progression()
{
    $argsForEngine = [];
    $argsForEngine["rule"] = 'What number is missing in the progression?';
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNumStart = rand(1, 100);
        $rNumAdd = rand(1, 20);
        $rNumHidden = rand(0, 9);
        $arrProgress = createArray($rNumStart, $rNumAdd);
        $strProgress = createStrProgress($arrProgress, $rNumHidden);
        $argsForEngine["question{$i}"] = "{$strProgress}";
        $argsForEngine["answer{$i}"] = $arrProgress[$rNumHidden];
    }
    Engine\engine($argsForEngine);
    return;
}
