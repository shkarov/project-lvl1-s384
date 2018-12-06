<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_REPEATS = 3;

function engine($rule, $funcName)
{
    line('Welcome to the Brain Games!');
    $player = \cli\prompt('May I have your name?');
    line("Hello, %s!", $player);
    line($rule);
    if (callGame($funcName, COUNT_REPEATS)) {
        line("Congratulations, %s!", $player);
    } else {
        line('It is wrong answer :-).');
        line("Let's try again, %s!", $player);
    }
    return;
}
function callGame($funcName, $counter)
{
    if ($counter == 0) {
        return true;
    }
    $qwestAnswer = $funcName();
    line("Question: %s", $qwestAnswer['question']);
    $answer = prompt('Your answer');
    if ($answer == $qwestAnswer['answer']) {
        line('Correct!');
        return callGame($funcName, $counter - 1);
    } else {
        return false;
    }
}
