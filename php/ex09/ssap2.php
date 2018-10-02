#!/usr/bin/php
<?php
	function ft_split($str)
	{  
		$str = trim($str);
		$str = (explode(" ", preg_replace("/ +/", " ",$str)));
		return ($str);
	}

	$final = [];
	$apha = [];
	$num = [];
	$rchar = [];
	$i = 1;
	while ($i < $argc)
	{
		$str = ft_split($argv[$i]);
		$len = count($str);
		for ($j = 0; $j < $len; $j++)
			array_push($final, $str[$j]);
		$i++;
	}
	foreach($final as $word)
		if ((ord($word) >= 97 && ord($word)<= 122) || (ord($word) >= 65 && ord($word) <= 90))
			array_push($apha, $word);
	foreach($final as $word)
		if ((ord($word) >= 48 && ord($word)<= 57))
			array_push($num, $word);
	foreach($final as $word)
		if ((ord($word) >= 33 && ord($word)<= 47) || (ord($word) >= 58 && ord($word) <= 64))
			array_push($rchar, $word);
	natcasesort($apha);
	sort($num, SORT_STRING);
	sort($rchar);
	$ret = array_merge($apha, $num, $rchar);
	foreach($ret as $word)
		echo $word."\n";
?>