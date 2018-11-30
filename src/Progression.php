<?php
namespace BrainGames\Progression;

use BrainGames\Funcs;

function progression()
{
    \cli\line('What number is missing in the progression?');

    $arr = [];
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 20);
        $rNum3 = rand(0, 9);
        
        $arrProgress = Funcs\createArray($rNum1, $rNum2);
        $strProgress = Funcs\createStrProgress($arrProgress, $rNum3);

        \cli\line("Question:, %s", "{$strProgress}");
        $answer = \cli\prompt('Your answer');
        if ($arrProgress[$rNum3] == $answer) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            break;
        }
    }
    return $countCorrect == 3;
}