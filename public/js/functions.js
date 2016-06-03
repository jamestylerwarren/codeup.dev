"use strict";

var myNameIs = 'Bob'; // TODO: Fill in your name here.

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

function sayHello(name) {
    console.log("My name is " + name + ".")
}



// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

sayHello(myNameIs);


// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.


console.log("random number is " + random.toString());

function isodd(number) {

 	number % 2 === 1 ? console.log("Number is odd.") : console.log("Number is not odd.");
}


// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.

isodd(random);




// Turning for loop exercise to functions:

var message;





function pyramid(message) {
	
	for (var i = 1; i <= 10; i++) 
	{

	message = '';

	for (var j = 1; j <= i; j++)
	{
	
		if (i == 10) 
		{
			message = message + 0;
		}

		else
		{	
			message = message + i;
		}	

	}
	
	console.log (message);

	}
	};


pyramid(message);





var A;
function multiply(A){ 

for (var A = Math.floor(Math.random() * 10) + 1, B = 1; B <= 10; B++) {
			var C = A * B	
		console.log(A + "x" + B + "=" + C);
	}
}

multiply(A);







function oddNumber(random) {

for (var i = 0; i < 10; i++) {
		var random = Math.floor(Math.random() * 180) + 20; 
	
		var message = (random % 2 == 0) ? random + " is even." : random + " is odd.";
		console.log(message);
	}
};

oddNumber(random);








var i

function decrease(i) {

	for (i = 100; i >= 5; i = i - 5) {
		console.log(i);
	}
};



decrease(i);



