<?php
/* Integers*/

echo PHP_INT_MAX . '<br/>'; //_ underscore
echo PHP_INT_MIN . '<br/>';
echo PHP_INT_SIZE . '<br/>';

$x = 5; // base 10, decimal
$y = 10; // base 10, decimal

echo $x . '<br/>';
echo $y . '<br/>';

$x = 0x2A;   //  base 16 or hexadecimal
echo $x . '<br/>';

$x = 05; // Octal number
echo $x . '<br/>';

$x = 055; // Octal number
echo $x . '<br/>';

$x = 0b11; // Binary number
echo $x . '<br/>';

$x = 0b110; // Binary number
echo $x . '<br/>';

$x = PHP_INT_MAX;
echo $x . '<br/>';
echo '<br/>';
var_dump($x);

$x = PHP_INT_MAX + 1; // It becomes a float number
echo $x . '<br/>';
echo '<br/>';
var_dump($x);

