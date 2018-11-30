<?php
namespace BrainGames\Gcd;

use BrainGames\Funcs;

function gcd()
{
    \cli\line('Find the greatest common divisor of given numbers.');

    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);

        \cli\line("Question:, %s", "{$rNum1} {$rNum2}");
        $result = Funcs\algEuclidian($rNum1, $rNum2);
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
