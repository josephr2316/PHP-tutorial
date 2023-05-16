<?php

//  Constant

define('STATUS_PAID', 'paid'); // Case-sensitive or not has been deprecated, the third parameter // Define at a runtime
//define('STATUS_PAID', 1); // It will be an error

const STATUS = 'hello'; // Defined at a compile time

$firstName = 'Joseph';
$firstName = 'Joe';
echo $firstName;
echo STATUS_PAID;
echo defined('STATUS_PAID');
echo defined('STATUS_VOID'); // Nothing gets printed, it's not defined
echo STATUS;
echo defined('STATUS');

if (true){
//    const FOO = 'bar'; // Won't work
    define('NEW_Paid', 9);
}

$paid = 'PAID2';

//define('STATUS_' . $paid, $paid);
define('STATUS_' . $paid, 88);
echo STATUS_PAID2;
echo "\n";
echo PHP_VERSION;
echo "\n";
echo __LINE__; //Their value changes
echo "\n";
echo __LINE__; //Their value changes




