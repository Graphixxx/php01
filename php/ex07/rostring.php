#!/usr/bin/php
<?php
     function ft_split($str)
     {  
         $str = trim($str);
         $str = (explode(" ", preg_replace("/ +/", " ",$str)));
         return ($str);
     }
    if ($argc > 1)
    {
        $str = ft_split($argv[1]);
        $len = count($str);
        for ($i = 0; $i < $len; $i++)
        {
            if ($i > 0)
                echo $str[$i]." ";
        }
        if ($i > 0)
            echo $str[0];
    }
?>