<?php
namespace BrainGames\CheckParity;

use BrainGames\Funcs;

function check()
{
    \cli\line('Answer "yes" if number even otherwise answer "no".');
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum = rand(1, 100);
        \cli\line("Question:, %s", $rNum);
        $answer = \cli\prompt('Your answer');
        if ((Funcs\isParity($rNum) && strtolower($answer) == "yes") || (!Funcs\isParity($rNum) && strtolower($answer) == "no")) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            break;
        }
    }
    return $countCorrect == 3;
}
