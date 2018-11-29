<?php
namespace BrainGames\Calc;

function arithmetic($num1, $num2, $sign)
{
    switch ($sign) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;                
    }
}
function calc()
{
    \cli\line('Welcome to the Brain Games!');
    \cli\line('What is the result of the expression?');
    $name = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $name);
    $arrSigns = array('+', '-', '*');
    $countCorrect = 0;
    for ($i = 0; $i < 3; $i++) {
        $rNum1 = rand(1, 100);
        $rNum2 = rand(1, 100);
        $signIndex = array_rand($arrSigns);
        $sign = $arrSigns[$signIndex];
        \cli\line("Question:, %s", "{$rNum1} {$sign} {$rNum2}");
        $result = arithmetic($rNum1, $rNum2, $sign);
        $answer = \cli\prompt('Your answer');
        if ($result == $answer) {
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
