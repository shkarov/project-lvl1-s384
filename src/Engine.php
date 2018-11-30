<?php
namespace BrainGames\Engine;

function engine($argsForEngine)
{
    \cli\line('Welcome to the Brain Games!');
    $player = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $player);
    \cli\line($argsForEngine["rule"]);

    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        \cli\line("Question:, %s", $argsForEngine["question{$i}"]);
        $answer = \cli\prompt('Your answer');
        if ($answer == $argsForEngine["answer{$i}"]) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            break;
        }
    }
    if ($countCorrect == 3) {
        \cli\line("Congratulations, %s!", $player);
    } else {
        \cli\line('It is wrong answer :-).');
        \cli\line("Let's try again, %s!", $player);
    }
    return;
}
