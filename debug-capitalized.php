<?php

$capitalized = ['arches', 'badlands', 'carlsbad', 'denali'];

$to_capitalized = ['denali', 'badlands'];

function capitalizeParks($capitalized, $to_capitalized) {
	foreach ($capitalized as $key => $keyword) {
		foreach ($to_capitalized as $word) {
			if ($keyword == $word) {
				$capitalized[$key] = ucfirst($keyword);
			}
		}
	}
	return $capitalized;
}
print_r(capitalizeParks($capitalized, $to_capitalized));