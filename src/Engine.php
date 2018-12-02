<?php
namespace BrainGames\Engine;

const COUNT_REPEATS = 3;

function engine($rule, $funcName)
{
    \cli\line('Welcome to the Brain Games!');
    $player = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $player);
    \cli\line($rule);
    if (callGame($funcName, COUNT_REPEATS)) {
        \cli\line("Congratulations, %s!", $player);
    } else {
        \cli\line('It is wrong answer :-).');
        \cli\line("Let's try again, %s!", $player);
    }
    return;
}
function callGame($funcName, $counter)
{
    if ($counter == 0) {
        return true;
    }
    $qwestAnswer = $funcName();
    \cli\line("Question: %s", $qwestAnswer['qwestion']);
    $answer = \cli\prompt('Your answer');
    if ($answer == $qwestAnswer['answer']) {
        \cli\line('Correct!');
        return callGame($funcName, $counter - 1);
    } else {
        return false;
    }
}
