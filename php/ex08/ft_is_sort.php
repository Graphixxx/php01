#!/usr/bin/php
<?php
    function ft_is_sort($arr)
    {
        $origional = $arr;
        sort($arr);
        foreach ($arr as $key=>$value)
            if ($origional[$key] != $arr[$key])
                return (false);
        return (true);
    }
?>