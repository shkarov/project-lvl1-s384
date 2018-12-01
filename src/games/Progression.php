<?php
namespace BrainGames\Progression;

use BrainGames\Engine;

function progression()
{
    $rule = 'What number is missing in the progression?';
    $funcName = 'BrainGames\Progression\logicProgress';
    Engine\engine($rule, $funcName);
    return;
}
function logicProgress()
{
    $rNumStart = rand(1, 100);
    $rNumAdd = rand(1, 20);
    $rNumHidden = rand(0, 9);
    $arrProgress = createArray($rNumStart, $rNumAdd);
    $strProgress = createStrProgress($arrProgress, $rNumHidden);
    $qa = [];
    $qa['qwestion'] = "{$strProgress}";
    $qa['answer'] = $arrProgress[$rNumHidden];
    return $qa;
}
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
