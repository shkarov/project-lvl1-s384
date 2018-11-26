<?php
namespace BrainGames\Cli;

function run()
{
  \cli\line('Welcome to the Brain Games!');
  $name = \cli\prompt('May I have your name?');
  \cli\line("Hello, %s!", $name);
  return true;
}

