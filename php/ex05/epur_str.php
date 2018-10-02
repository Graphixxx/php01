#!/usr/bin/php
<?php
	$str = preg_replace("/ +/", " ",$argv[1]);
	$str = trim($str);
	echo $str;
?>