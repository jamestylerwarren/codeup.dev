(function () { 
	"use strict"


	// var oneButton = document.getElementById('1');
	// var twoButton = document.getElementById('2');
	// var threeButton = document.getElementById('3');
	// var fourButton = document.getElementById('4');
	// var fiveButton = document.getElementById('5');
	// var sixButton = document.getElementById('6');
	// var sevenButton = document.getElementById('7');
	// var eightButton = document.getElementById('8');
	// var nineButton = document.getElementById('9');
	// var equalsButton = document.getElementById('=');
	// var plusButton = document.getElementById('+');
	// var minusButton = document.getElementById('-');
	// var multiplyButton = document.getElementById('*');
	// var divideButton = document.getElementById('/');



	// adding listeners to buttons, and putting them in the correct fields
	var listenerZero = function (click0) {
		var field = document.getElementById("field");
		var zeroButton = document.getElementById('zero');
		field.value = field.value + "0";
	}
	document.getElementById("zero").addEventListener('click', listenerZero, false);


	var listenerOne = function (click) {
		var field = document.getElementById("field");
		var oneButton = document.getElementById('one');
		field.value = field.value + "1";
	}
	document.getElementById("one").addEventListener('click', listenerOne, false);

	var listenerTwo = function (click) {
		var field = document.getElementById("field");
		var twoButton = document.getElementById('two');
		field.value = field.value + "2";
	}
	document.getElementById("two").addEventListener('click', listenerTwo, false);


	var listenerThree = function (click) {
		var field = document.getElementById("field");
		var threeButton = document.getElementById('three');
		field.value = field.value + "3";
	}
	document.getElementById("three").addEventListener('click', listenerThree, false);


	var listenerFour = function (click) {
		var field = document.getElementById("field");
		var fourButton = document.getElementById('four');
		field.value = field.value + "4";
	}
	document.getElementById("four").addEventListener('click', listenerFour, false);

	var listenerFive = function (click) {
		var field = document.getElementById("field");
		var fiveButton = document.getElementById('five');
		field.value = field.value + "5";
	}
	document.getElementById("five").addEventListener('click', listenerFive, false);

	var listenerSix = function (click) {
		var field = document.getElementById("field");
		var sixButton = document.getElementById('six');
		field.value = field.value + "6";
	}
	document.getElementById("six").addEventListener('click', listenerSix, false);

	var listenerSeven = function (click) {
		var field = document.getElementById("field");
		var sevenButton = document.getElementById('seven');
		field.value = field.value + "7";
	}
	document.getElementById("seven").addEventListener('click', listenerSeven, false);

	var listenerEight = function (click) {
		var field = document.getElementById("field");
		var eightButton = document.getElementById('eight');
		field.value = field.value + "8";
	}
	document.getElementById("eight").addEventListener('click', listenerEight, false);

	var listenerNine = function (click) {
		var field = document.getElementById("field");
		var nineButton = document.getElementById('nine');
		field.value = field.value + "9";
	}
	document.getElementById("nine").addEventListener('click', listenerNine, false);

	var listenerPlus = function (click) {
		var operator = document.getElementById("operator");
		var plusButton = document.getElementById('plus');
		operator.value = "+";
	}
	document.getElementById("plus").addEventListener('click', listenerPlus, false);

	var listenerMinus = function (click) {
		var operator = document.getElementById("operator");
		var minusButton = document.getElementById('minus');
		operator.value = "-";
	}
	document.getElementById("minus").addEventListener('click', listenerMinus, false);

	var listenerMultiply = function (click) {
		var operator = document.getElementById("operator");
		var multiplyButton = document.getElementById('multiply');
		operator.value = "*";
	}
	document.getElementById("multiply").addEventListener('click', listenerMultiply, false);

	var listenerDivide = function (click) {
		var operator = document.getElementById("operator");
		var divideButton = document.getElementById('divide');
		operator.value = "/";
	}
	document.getElementById("divide").addEventListener('click', listenerDivide, false);

	var listenerClear = function (click) {
		var operator = document.getElementById("operator");
		var clearButton = document.getElementById('clear');
		operator.value = "";
		var field = document.getElementById("field");
		field.value = "";
		var result = document.getElementById("result");
		result.value = "";
	}
	document.getElementById("clear").addEventListener('click', listenerClear, false);



	var firstValue = "";
		
	console.log(firstValue)







	function saveInput(){
	}


	function saveOperator(){
	}
	var result = {

	}



























})();