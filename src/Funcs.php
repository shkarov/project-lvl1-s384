<?php
namespace BrainGames\Funcs;

function hello()
{
    \cli\line('Welcome to the Brain Games!');
    $name = \cli\prompt('May I have your name?');
    \cli\line("Hello, %s!", $name);
    return $name;
}
function by($name, $isOK)
{
    if ($isOK) {
        \cli\line("Congratulations, %s!", $name);
    } else {
        \cli\line('It is wrong answer :-).');
        \cli\line("Let's try again, %s!", $name);
    }
    return;
}
function isParity($number)
{
    return ($number % 2 == 0) ? true : false;
}
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