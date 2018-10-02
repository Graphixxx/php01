#!/usr/bin/php
<?php
    $x = 'X';
    for ($i = 0; $i < 1000; $i++)
    {
        if ($i != 0 && ($i % 100 == 0))
            echo "\n";
        echo $x;
    }
    echo "\n";
?>