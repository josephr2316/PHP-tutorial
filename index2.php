<!DOCTYPE html>
<html lang="en">

<!--Don't mix directly html in your php-->
    <body>

        <h1><?php
            echo 'Hello World' ?>
            <?= 'Hello World' ?>

        </h1>
        <h1>My First Heading</h1>-
        <p>My first paragraph.</p>

        <?php
            // Comment 1
            # Comment 2
        /*
            Multi Line Comment
         */

        /**
         * Documentation for your source code
         */
            $x = 10;
            $y = 5;
            // Don't mix directly html in your php, presentation logic and business logic
             echo '<p>' . $x . ',' . $y . '</p>';
        ?>
    </body>
</html>