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
		var fieldOne = document.getElementById("fieldOne");
		var zeroButton = document.getElementById('zero');
		getNumber(0);
	}
	document.getElementById("zero").addEventListener('click', listenerZero, false);


	var listenerOne = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var oneButton = document.getElementById('one');
		getNumber(1);
	}
	document.getElementById("one").addEventListener('click', listenerOne, false);

	var listenerTwo = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var twoButton = document.getElementById('two');
		getNumber(2);
	}
	document.getElementById("two").addEventListener('click', listenerTwo, false);


	var listenerThree = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var threeButton = document.getElementById('three');
		getNumber(3);
	}
	document.getElementById("three").addEventListener('click', listenerThree, false);


	var listenerFour = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var fourButton = document.getElementById('four');
		getNumber(4);
	}
	document.getElementById("four").addEventListener('click', listenerFour, false);

	var listenerFive = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var fiveButton = document.getElementById('five');
		getNumber(5);
	}
	document.getElementById("five").addEventListener('click', listenerFive, false);

	var listenerSix = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var sixButton = document.getElementById('six');
		getNumber(6);
	}
	document.getElementById("six").addEventListener('click', listenerSix, false);

	var listenerSeven = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var sevenButton = document.getElementById('seven');
		getNumber(7);
	}
	document.getElementById("seven").addEventListener('click', listenerSeven, false);

	var listenerEight = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var eightButton = document.getElementById('eight');
		getNumber(8);
	}
	document.getElementById("eight").addEventListener('click', listenerEight, false);

	var listenerNine = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var nineButton = document.getElementById('nine');
		getNumber(9);
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
		var field = document.getElementById("fieldOne");
		fieldOne.value = "";
		var result = document.getElementById("result");
		fieldTwo.value = "";
	}
	document.getElementById("clear").addEventListener('click', listenerClear, false);

	var listenerEquals = function (click) {
		var fieldOne = document.getElementById("fieldOne");
		var equalsButton = document.getElementById('equals');
		result();

	}
	document.getElementById("equals").addEventListener('click', listenerEquals, false);



	function getNumber(num) {
		if (document.getElementById("operator").value == "") {
			document.getElementById("fieldOne").value += num;
		} else {
			document.getElementById("fieldTwo").value += num;
		}
	}


	function result() {
	var operatorField = document.getElementById("operator").value;
	var firstField = document.getElementById("fieldOne").value;
	var secondField = document.getElementById("fieldTwo").value;
	var result;
	switch(operatorField){
		case "+":
        	result = firstField + secondField; 
       		parseInt(document.getElementById("operator").value) = "";
        	parseInt(document.getElementById("fieldTwo").value) = "";
        	break;
    case "-":
	    	result = firstField - secondField; 
	    	document.getElementById("operator").value = "";
	        document.getElementById("fieldTwo").value = "";
	    	break;
    case "*":
	    	result = firstField * secondField; 
	    	document.getElementById("operator").value = "";
	        document.getElementById("fieldTwo").value = "";
	    	break;
    case "/":
	    	result = firstField / secondField;
	    	document.getElementById("operator").value = "";
	        document.getElementById("fieldTwo").value = ""; 
	    	break;
	}
	
	document.getElementById("fieldOne").value = result;
	}


























})();