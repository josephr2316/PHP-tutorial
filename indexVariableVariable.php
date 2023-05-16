<?php
//  Variable Variable

$foo = 'bar';

$$foo = 'baz';

//$bar = 'baz'; //  This is what we're going to have

echo $foo, $bar; //  $bar == $$foo
echo "\n";
echo $foo, $$foo;
echo "\n";
echo "$foo, $$foo"; //  Won't print $$foo
echo "\n";
echo "$foo, {$$foo}";
echo "\n";
echo "$foo, ${$foo}";


