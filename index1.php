<?php
//The closing tag should be use if the code it aint' 100% percent php

echo 'Hello World';
echo print'Hello World';
//print echo 'Hello World' won't work
echo ("Hello World");
print("Hello World");
echo "Hello", " ", "World"; //Concate with echo, I can't do this with print, echo is faster
echo "Joe's Invoice";
echo 'Joe\'s Invoice';
$name = 'Joseph';
echo $name;
$_1234name = 'Master';

$x = 1;
$y = $x;
$x = 3;
echo $y;

$m = 1;
$n = &$m;
$m = 8;
echo $n;

$firstName = 'Joseph';
echo 'Hello $firstName';
echo "Hello $firstName";
echo "Hello {$firstName}";
echo "Hello ", $firstName;
echo "Hello ". $firstName;



//$this can't be use;
//Variable can't have special character, only letters from a-z (lower and uppercase) and it can begin with undercore

//We don't need the semi-colong in the last line if with close the tag
?>

Hello world