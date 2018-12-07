<?php
namespace BrainGames\Progression;

use BrainGames\Engine;

const LEN_PROGRESS = 10;

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
    $rNumEnd = $rNumStart + $rNumAdd * (LEN_PROGRESS - 1);
    $arrProgress = range($rNumStart, $rNumEnd, $rNumAdd);
    $strProgress = createProgressionWithMissingMember($arrProgress, $rNumHidden);
    $qa = [];
    $qa['question'] = "{$strProgress}";
    $qa['answer'] = $arrProgress[$rNumHidden];
    return $qa;
}
function createProgressionWithMissingMember($arr, $numHidden)
{
    $progress = array_map(function ($key) use ($arr, $numHidden) {
        return ($key == $numHidden) ? '..' : $arr[$key];
    }, array_keys($arr));
    return implode(' ', $progress);
}
