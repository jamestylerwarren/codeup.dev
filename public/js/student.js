'use strict';

document.getElementById("add-grade").disabled = true;
document.getElementById("calculate-average").disabled = true;


var saveButton = document.getElementById("save-name");
saveButton.addEventListener('click', getName, false);

var addAndContinue = document.getElementById("add-grade");
addAndContinue.addEventListener('click', addSubject, false);

var addAndCalculate = document.getElementById("calculate-average");
addAndCalculate.addEventListener('click', calculateAverage, false);

function getName (event){
	var students = " ";
	var student_name = document.getElementById("student-name").value;
	student.name = student_name
	document.getElementById("add-grade").disabled = false;
	document.getElementById("calculate-average").disabled = false;
}

function addSubject (event){
	var subjectName = " ";
	subjectName = document.getElementById("subject").value;
	document.getElementById("subject").value = "";
	var grade = "";
	grade = parseInt(document.getElementById("grade").value);
	document.getElementById("grade").value = "";
	document.getElementById("grades").innerHTML += "<tr><td>" + subjectName + "</td><td>" + grade + "</td></tr>";
	student.addSubject(subjectName, grade); 
}

function calculateAverage (event){	
	addSubject()
	var average = student.calculateAverage()
	document.getElementById("student-average").innerText = average;
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