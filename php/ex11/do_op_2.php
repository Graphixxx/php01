#!/usr/bin/php
<?php
    $op = [];
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        return ;
    }
    if (strchr($argv[1], '+'))
        $nums = explode("+", $argv[1]);
    if (strchr($argv[1], '-'))
        $nums = explode("-", $argv[1]);
    if (strchr($argv[1], '*'))
        $nums = explode("*", $argv[1]);
    if (strchr($argv[1], '/'))
        $nums = explode("/", $argv[1]);
    if (strchr($argv[1], '%'))
        $nums = explode("%", $argv[1]);
    if (count($nums) != 2)
        echo "Syntax Error\n";
    else
    {
        $nums[0] = trim($nums[0]);
        $nums[1] = trim($nums[1]);
        if (!is_numeric($nums[0]) && !is_numeric($nums[1]))
            echo "Syntax Error\n";
        else
        {
            for ($i = 0; $i < strlen($argv[1]); $i++)
                if (($argv[1][$i] === "+") || ($argv[1][$i] === "*") ||
                ($argv[1][$i] === "%") || ($argv[1][$i] === "/") ||
                ($argv[1][$i] === "-"))
                    array_push($op, $argv[1][$i]);
            if (count($op) != 1)
                echo "Syntax Error\n";
            else
            {
                if ($op[0] == '+' && strchr($argv[1], '+'))
                    echo ($nums[0] + $nums[1]);
                if ($op[0] == '-' && strchr($argv[1], '-'))
                    echo ($nums[0] - $nums[1]);
                if ($op[0] == '*' && strchr($argv[1], '*'))
                    echo ($nums[0] * $nums[1]);
                if ($op[0] == '/' && strchr($argv[1], '/'))
                    echo ($nums[0] / $nums[1]);
                if ($op[0] == '%' && strchr($argv[1], '%'))
                    echo ($nums[0] % $nums[1]);
            }
        }
    }
?>