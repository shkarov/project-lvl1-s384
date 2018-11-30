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
function algEuclidian($num1, $num2)
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return $num1;
}
function createArray($num1, $num2)
{
    $arr = [];
    $arr[0] = $num1;
    for ($i = 1; $i < 10; $i++) {
        $arr[$i]  = $arr[$i - 1] + $num2;
    }
    return $arr;
}
function createStrProgress($arr, $numHidden)
{
    $strProgress = "";    
    foreach ($arr as $key => $value) {
        if ($key !== $numHidden) {
            $strProgress .= " {$value}";
        } else {
            $strProgress .= " ..";  
        }    
    }
    return $strProgress;
}
