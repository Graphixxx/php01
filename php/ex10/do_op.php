#!/usr/bin/php
<?php
    function checkopp($c)
    {
        if (($c === "+") || ($c === "-") || ($c === "/") || ($c === "%") || ($c === "*"))
            return (1);
        return (0);
    }

    function calculate($op, $a, $b)
    {
        if ($op === "+")
            return ($a + $b);
        if ($op === "-")
            return ($a - $b);
        if ($op === "*")
            return ($a * $b);
        if ($op === "/")
            return ($a / $b);
        if ($op === "%")
            return ($a % $b);
    }
    if ($argc != 4)
        echo "Incorrect Parameters\n";
    else
    {
        $a = trim($argv[1]);
        $o = trim($argv[2]);
        $b = trim($argv[3]);
        if (is_numeric($a) && is_numeric($b) && checkopp($o))
            echo calculate($o, $a, $b)."\n";
        else
            echo "Incorrect Parameters\n";
    }
?>