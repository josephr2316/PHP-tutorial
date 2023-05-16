<?php
declare(strict_types=1);

//  Dynamically Typed can change after it's been defined, happens at run time
//  Static Typed, happens at compile time

//Strict type mode

/* Data Types & Type Casting */

#   4   Scalar Types
        #   bool - true / false
        $completed = true; # True will print 1 and false will be blank
        #   int - 1, 2, 3, 0, -5 (no decimal)
        $score = 75;
        #   float - 1.5, 0.1, 0.005, -15.8
        $price = 0.99;
        #   string - "Joseph", "Hello World"
        $greeting = "Hello Joseph";

        echo $completed . '<br/>';
        echo $score . '<br/>';
        echo $price . '<br/>';
        echo $greeting . '<br/>';

        echo gettype($completed);
        echo gettype($score);
        echo gettype($price); // Float will be double
        echo gettype($greeting);

        var_dump($completed);
        var_dump($score);
        var_dump($price);
        var_dump($greeting);

#  4    Compound Types
        #   array
        $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
        echo $companies; // It will print the array name with some warnings
        print $companies;   // It will print the array name with some warnings
        print_r($companies);
        #   object
        #   callable
        #   iterable

#  2    Special Types
        #   resource
        #   null

//function sum(int $x, int $y) // type juggling or type coercion

// It's going to throw an error, if it can't make the conversion as expecting an array and receive an int
//function sum(array $x, int $y)
function sum($x, $y){
    var_dump($x, $y);
    echo '<br/>';
    return $x + $y;
}

function sum2($x, $y){
    $x = 5.5;
    var_dump($x, $y);
    echo '<br/>';
    return $x + $y;
}


echo sum(2,3) . '<br/>';
echo sum(2,'3') . '<br/>'; // It makes the conversion
$sum = sum(2,'3');
var_dump($sum);
echo '<br/>';
$sum = sum2(2,3);
echo $sum;
echo '<br/>';
var_dump($sum);



function sum3(int $x, int $y){
     return $x + $y;
}

function sum4(float $x, float $y){
    return $x + $y;
}
//$sum = sum3('2',3);
echo $sum . '<br/>';

$sum = sum4(3.5,2.5);
echo $sum . '<br/>';

$sum = sum4(3,2);
echo $sum . '<br/>';


# Casting a variable

$x = (int) '5';