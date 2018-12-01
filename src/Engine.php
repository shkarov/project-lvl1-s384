<?php
namespace BrainGames\Engine;

const COUNT_REPEATS = 3;

function engine($rule, $funcName) 
{
    \cli\line('Welcome to the Brain Games!');
    $player = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $player);
    \cli\line($rule);
    $countCorrect = 0;
    for ($i = 0; $i < COUNT_REPEATS; $i++) {
        $qwestAnswer = $funcName();
        \cli\line("Question: %s", $qwestAnswer['qwestion']);
        $answer = \cli\prompt('Your answer');
        if ($answer == $qwestAnswer['answer']) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            break;
        }
    }
    if ($countCorrect == COUNT_REPEATS) {
        \cli\line("Congratulations, %s!", $player);
    } else {
        \cli\line('It is wrong answer :-).');
        \cli\line("Let's try again, %s!", $player);
    }
    return;
}
