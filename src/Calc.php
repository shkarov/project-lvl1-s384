<?php
namespace BrainGames\Calc;

function calc()
{
    \cli\line('Welcome to the Brain Games!');
    \cli\line('What is the result of the expression?');
    $name = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $name);

    $arithSigns = array('+', '-', '*');

    $countCorrect = 0;
    //for ($i = 0; $i < 3; $i++) {

        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);
        $signIndex = array_rand($arithSigns);
        $sign = $arithSigns[$signIndex];

        \cli\line("Question:, %s", "{$rNum1} {$sign} {$rNum2}");
        //$answer = \cli\prompt('Your answer');

        $result = "{$rNum1} {$sign} {$rNum2}";
        var_dump($result);
        $x = eval($result);
        
        var_dump($x);

    /*    if ((isParity($rNum) && strtolower($answer) == "yes") || (!isParity($rNum) && strtolower($answer) == "no")) {
            $countCorrect += 1;
            \cli\line('Correct!');
        } else {
            \cli\line('"yes" is wrong answer ;(. Correct answer was "no"');
            \cli\line("Let's try again, %s!", $name);
            break;
        }
    */    
    //}
    if ($countCorrect == 3) {
        \cli\line("Congratulations, %s!", $name);
    }
    return;
}
