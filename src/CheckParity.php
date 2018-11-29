<?php
namespace BrainGames\CheckParity;

function isParity($number)
{
    return ($number % 2 == 0) ? true : false;
}
function check()
{
    \cli\line('Welcome to the Brain Games!');
    \cli\line('Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $name);
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        \cli\line("Question:, %s", $randomNumber);
        $answer = \cli\prompt('Your answer');
        if ((isParity($randomNumber) && strtolower($answer) === "yes") || (!isParity($randomNumber) && strtolower($answer) === "no")) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            \cli\line('"yes" is wrong answer ;(. Correct answer was "no"');
            \cli\line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($countCorrect == 3) {
        \cli\line("Congratulations, %s!", $name);
    }
    return;
}
