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

$x = PHP_INT_MAX + 1; // It becomes a float number, out of bounds of int
echo $x . '<br/>';
echo '<br/>';
var_dump($x);

$x = (int) (PHP_INT_MAX + 1);
echo $x . '<br/>';
var_dump($x);

$x = (integer) (PHP_INT_MAX + 1);
echo $x . '<br/>';
var_dump($x);

$x = (integer) true;
echo $x . '<br/>';
var_dump($x);

$x = (integer) false;
echo $x . '<br/>';
var_dump($x);

$x = (int) 5.98; // rounded down
echo $x . '<br/>';
var_dump($x);

$x = (int) '5.98'; // rounded down
echo $x . '<br/>';
var_dump($x);

$x = (int) '87'; //
echo $x . '<br/>';
var_dump($x);

$x = (int) '87awdwada'; // It will print until it found a character
echo $x . '<br/>';
var_dump($x);


$x = (int) '87awdwada77'; //  It will print until it found a character
echo $x . '<br/>';
var_dump($x);

$x = (int) 'awdwada77'; //  It will be converted into 0
echo $x . '<br/>';
var_dump($x);

$x = (int) null; //  It will be converted into 0
echo $x . '<br/>';
var_dump($x);

$x = (int) 'awdwada77'; //  It will be converted into 0
echo $x . '<br/>';
var_dump(is_int($x));

$x = (int) null; //  It will be converted into 0
echo $x . '<br/>';
var_dump(is_int($x));

$x =  null; //  It will be converted into 0
echo $x . '<br/>';
var_dump(is_int($x));

$x =  200_000; //  To make it more readable
echo $x . '<br/>';
var_dump(is_int($x));

$x =  2_000_000_000; //  To make it more readable
echo $x . '<br/>';
var_dump(is_int($x));

$x =  '2_000_000_000'; //  But this won't work with string or casting
echo $x . '<br/>';
var_dump(is_int($x));

$x =  (int)'2_000_000_000'; //  But this won't work with string or casting
echo $x . '<br/>';
var_dump(is_int($x));

