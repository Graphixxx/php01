#!/usr/bin/php
<?php
    function ft_split($str)
    {  
        $str = trim($str);
        $str = (explode(" ", preg_replace("/ +/", " ",$str)));
        return ($str);
    }

    $final = [];
    $i = 1;
    while ($i < $argc)
    {
        $str = ft_split($argv[$i]);
        $len = count($str);
        for ($j = 0; $j < $len; $j++)
            array_push($final, $str[$j]);
        $i++;
    }
    sort($final);
    foreach($final as $word)
        echo $word."\n";
?>