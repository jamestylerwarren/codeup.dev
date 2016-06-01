"use strict"

var averageGrade = ("81.67")

if (averageGrade >= 80) {
	console.log("You are awesome!")
} else {
	console.log("You need more practice.")
}



var cameron = 180
var ryan = 250
var george = 320



if (cameron >= 200) {
	console.log("Cameron receives a discounted amount of $" + (cameron * .65).toFixed(2) + ". ", "His original total was $" + cameron.toFixed(2) + ".")
} else {
	console.log("Cameron did not receive a discount. His total is $" + cameron.toFixed(2) + ".")
}


if (ryan >= 200) {
	console.log("Ryan receives a discounted amount of $" + (ryan * .65).toFixed(2) + ". ", "His original total was $" + ryan.toFixed(2) + ".")
} else {
	console.log("Ryan did not receive a discount. His total is $" + ryan.toFixed(2) + ".")
}


if (george >= 200) {
	console.log("George receives a discounted amount of $" + (george * .65).toFixed(2) + ". ", "His original total was $" + george.toFixed(2) + ".")
} else {
	console.log("George did not receive a discount. His total is $" + george.toFixed(2) + ".")
}




var flipACoin = Math.floor(Math.random()*2)

if (flipACoin == 0) {
	console.log("Buy a car.")
} else {
	console.log("Buy a house.")
}


var flipACoin = (flipACoin == 0) ? console.log("Buy a car.") : console.log("Buy a house.")

