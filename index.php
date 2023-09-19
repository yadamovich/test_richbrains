<?php

function getCornersCount(string ...$shapeName): string 
{
	$shapeMap = [
		'square' => 4,
		'circle' => 0,
		'triangle' => 3
		];
	
	$result = '';
	foreach ($shapeName as $shape) {
		$result .= $shape  . ' - ' . (isset($shapeMap[$shape]) ? $shapeMap[$shape] : 'not defined') .  "\n";
	}	
	return $result;
}

print getCornersCount('square', 'circle', 'triangle', 'someShape');
