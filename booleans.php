<?php
/* BOOLEANS */
$isComplete = true; // True, TRUE; TrUE
$isComplete = false;
$isComplete = -1; // true
$isComplete = -0; // false
$isComplete = null; // false

//  integers 0 -0 = false
//  floats 0.0 -0.0 = false
//  '' = false
//  '0' = false
//  [] = false
//  null = false

if($isComplete){
    //  do something
    echo 'success';
}
else{
    //  do something
    echo 'fail';
}

$isComplete = true; // Will try to cast into a string, false becomes empty null, true becomes 1
echo "\n";
var_dump($isComplete);
echo "\n";
echo '<br/>'. $isComplete;

$isComplete = false;
echo "\n";
var_dump($isComplete);
echo "\n";
echo '<br/>'. $isComplete;

$isComplete = (string) false;
echo "\n";
var_dump($isComplete);
echo "\n";
echo '<br/>'. $isComplete;

$isComplete = (string) true;
echo "\n";
var_dump($isComplete);
echo "\n";
echo '<br/>'. $isComplete;

$isComplete = true;
var_dump(is_bool($isComplete));
echo is_bool($isComplete);

$isComplete = 'false';   // This is a string

var_dump(is_bool($isComplete)); // It's not boolean, but the function is_bool, it's boolean
echo $isComplete;
