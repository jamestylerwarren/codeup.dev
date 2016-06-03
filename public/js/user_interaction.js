"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.



do {
    var response = prompt("What is your name?");

} while (response == "" || response === null);

console.log(response);

alert("Thanks " + response + "!");
     
// TODO: Show an alert message that welcomes the user based on their input.



// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.



var message = confirm("Do you like pizza?");

if (message) {
    alert("So do I!");
    console.log(message);
} else {
    alert("What?!? Seriously????");
};