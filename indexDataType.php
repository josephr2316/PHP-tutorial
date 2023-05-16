<!--//  Dynamically Typed can change after it's been defined, happens at run time -->
<!--//  Static Typed, happens at compile time-->

<?php
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
        #   object
        #   callable
        #   iterable

#  2    Special Types
        #   resource
        #   null
