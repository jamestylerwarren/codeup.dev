<?php

function inputHas($key) {
	return isset($_REQUEST[$key]) ? true : false;
}

function inputGet($key) {
	return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
}

function keyCheck($key) {
	if (inputHas($key)) {
		return inputGet($key);
	}
} 

function escape($input) {
	return htmlspecialchars($input);
}