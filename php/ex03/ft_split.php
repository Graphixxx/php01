#!/usr/bin/php
<?php
    function ft_split($str)
    {  
        $str = trim($str);
        $str = (explode(" ", preg_replace("/ +/", " ",$str)));
        return ($str);
    }
?>