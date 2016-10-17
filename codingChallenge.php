<?php

//1.)
$string = "welcome to the coding challenge";
function capitalize($string) {
	$array = explode(" ", $string);
	foreach ($array as $key => $value) {
		$array[$key] = ucfirst($value);
	}
	$newString = implode(" ", $array);
	return $newString . PHP_EOL;
}
print_r(capitalize($string));

//2.)
$string = 'abcdefgh';
function changeLetter($change){

}


//3.)
function pyramid($string) {
	$newString = strrev($string);
	$array = str_split($newString);
	$length = count($array);
	var_dump($array);
}
print_r(pyramid($string));