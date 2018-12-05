<?php
namespace BrainGames\Progression;

use BrainGames\Engine;

function progression()
{
    $rule = 'What number is missing in the progression?';
    $funcName = 'BrainGames\Progression\restoreArithmeticProgression';
    Engine\engine($rule, $funcName);
    return;
}
function restoreArithmeticProgression()
{
    $rNumStart = rand(1, 100);
    $rNumAdd = rand(1, 20);
    $rNumHidden = rand(0, 9);
    $arrProgress = createProgression($rNumStart, $rNumAdd);
    $strProgress = createProgressionWithMissingMember($arrProgress, $rNumHidden);
    $qa = [];
    $qa['question'] = "{$strProgress}";
    $qa['answer'] = $arrProgress[$rNumHidden];
    return $qa;
}
function createProgression($rNumStart, $rNumAdd)
{
    $arr = [];
    $arr[0] = $rNumStart;
    for ($i = 1; $i < 10; $i++) {
        $arr[$i]  = $arr[$i - 1] + $rNumAdd;
    }
    return $arr;
}
function createProgressionWithMissingMember($arr, $numHidden)
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
