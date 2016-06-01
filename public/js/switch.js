'use strict';




var luckyNumber = Math.floor(Math.random()* 6)
var receiptTotal = 60



switch (luckyNumber) {
    case 0:
        console.log("You do not receive a discount. Your total is " + luckyNumber);
        break;
    case 1:
        console.log("Your total comes to " + receiptTotal * .90);
        break;
    case 2:
        console.log("Your total comes to " + receiptTotal * .75);
        break;
    case 3:
        console.log("Your total comes to " + receiptTotal * .65);
        break;
    case 4:
        console.log("Your total comes to " + receiptTotal * .50);
        break;
  	default:
        console.log("Your junk is free!");
        break;
}


var month = Math.floor(Math.random()* 12)+1

console.log(month);

switch (month) {
    case 1:
        console.log("January = 1");
        break;
    case 2:
        console.log("February =2 ");
        break;
    case 3:
        console.log("March = 3");
        break;
    case 4:
        console.log("April = 4");
        break;
    case 5:
        console.log("May = 5");
        break;
  	case 6:
        console.log("June = 6");
        break;
	case 7:
        console.log("July = 7");
        break;
	case 8:
        console.log("August = 8");
        break;
	case 9:
        console.log("September = 9");
        break;
	case 10:
        console.log("October = 10");
        break;
	case 11:
        console.log("November = 11");
        break;	
    default:
    	console.log("December = 12");
    	break;





}