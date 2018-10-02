#!/usr/bin/php
<?php
    echo "Enter a number: ";
    while ($str = fgets(STDIN))
    {
        $str = trim($str);
        if (is_numeric($str))
        {
            if (($str % 2) == 0)
                echo "The number " .$str. " is even\n";
            else
                echo "The number " .$str. " is odd\n";
        }
        else
            echo "'" .$str. "' is not a number\n";
        echo "Enter a number: ";
    }
    echo "\n";
?>