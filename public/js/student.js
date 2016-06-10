'use strict';
// Buttons are disabled upon page load
document.getElementById("add-grade").disabled = true;
document.getElementById("calculate-average").disabled = true;

// Adding Listeners
var saveButton = document.getElementById("save-name");
saveButton.addEventListener('click', getName, false);

var addAndContinue = document.getElementById("add-grade");
addAndContinue.addEventListener('click', addSubject, false);

var addAndCalculate = document.getElementById("calculate-average");
addAndCalculate.addEventListener('click', calculateAverage, false);



// getting name value and sending it to the variable student.name to store it
function getName (event){
	var students = " ";
	var student_name = document.getElementById("student-name").value;
	student_name = student.name 
	// enabling buttons when value is entered into name field
	document.getElementById("add-grade").disabled = false;
	document.getElementById("calculate-average").disabled = false;
	document.getElementById("student-name").innerText = student.name;
}


function addSubject (event){
	var subjectName = "";
	//calling subject field; saving the value as a string and sending to subject.name
	subjectName = document.getElementById("subject").value;
	document.getElementById("subject").value = "";
	var grade = "";
	//calling grade field; saving the value (as a number) as a string
	grade = parseInt(document.getElementById("grade").value);
	document.getElementById("grade").value = "";
	// sending grade to the table
	document.getElementById("grades").innerHTML += "<tr><td>" + subjectName 
	+ "</td><td>" + grade + "</td></tr>";
	//sending subject name and grade in the () to the addSubject function in the student variable
	student.addSubject(subjectName, grade); 
}

function calculateAverage (event){
	//this adds what is in the fields when you click add and calculate button; 
	//otherwise it won't take the data in subj and grade fields	
	addSubject()
	var average = student.calculateAverage()
	document.getElementById("student-average").innerText = average;
	//if statement evaluating wether the great is awesome or not
	if (student.isAwesome()) {
			document.getElementById("student-awesome").className = "";
		} else {
			document.getElementById("student-practice").className = "";
		}

}

var student = {
	awesomeGrade: 80,
	name: null,
	subjects: [],
	calculateAverage: function () {
		var average = 0;
		this.subjects.forEach(function (subject) {
			average += subject.grade;
		});
		console.log(average);
		return average / this.subjects.length;
	},
	addSubject: function (name, grade) {
		var subject = {
			name: name,
			grade: grade
		};
		this.subjects.push(subject);
	},
	isAwesome: function () {
		return this.calculateAverage() > this.awesomeGrade;
		}

}