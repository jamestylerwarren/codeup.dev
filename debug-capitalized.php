<?php

//1.)
$array = [1,2,3,4,5];
function reverseNumbers($array){
	$reverseArray = [];
	$length = count($array);
	for ($i=$length; $i>0; $i--) {
		$lastElement = array_pop($array);
		array_push($reverseArray, $lastElement);
	}
	print_r($reverseArray);
}
print_r(reverseNumbers($array));

//2.)
$string = "please excuse my dear aunt sally";
function capitalize($string) {
	$array = explode(" ", $string);
	foreach ($array as $key => $value) {
		$array[$key] = ucfirst($value);
	}
	$newString = implode(" ", $array);
	return $newString;
}
print_r(capitalize($string));

//Bonus

$num = [1,2,3,4,6,7,8,9,10]
function findMissingNumber($num){
	$length = count($num);
	for ($i=$num[0]; $i<=$length; $i++) { 
		$nextNum = $i+1;
		if () {
			# code...
		}
	}

}