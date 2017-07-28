<?php require "dumper.php"; ?>

<html>
    <head>
        <title>Hi there!</title>
    </head>

    <body>

        This is some awesome content!

       <?php
            dump(
                [
                    "example" => "of the webba-dumper",
                    "dumping" => ["an object", "with", "nested arrays", "and other", "types of", "variables"],
                     "it supports" => [
                         "booleans" => true,
                         "strings" => "example",
                         "floats, integers" => 12.3,
                         "NULL values" => NULL,
                         "and objects, arrays" => [
                             1, 2, 3, ['4' => 5]
                         ]
                     ]
                ]
            );
            // dump("Example with just a string");
       ?>

    </body>
</html>
