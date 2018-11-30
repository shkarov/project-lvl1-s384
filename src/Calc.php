<?php
namespace BrainGames\Calc;

use BrainGames\Funcs;

function calc()
{
    \cli\line('What is the result of the expression?');
    $arrSigns = array('+', '-', '*');
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);
        $signIndex = array_rand($arrSigns);
        $sign = $arrSigns[$signIndex];
        \cli\line("Question:, %s", "{$rNum1} {$sign} {$rNum2}");
        $result = Funcs\arithmetic($rNum1, $rNum2, $sign);
        $answer = \cli\prompt('Your answer');
        if ($result == $answer) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            break;
        }
    }
    return $countCorrect == 3;
}
