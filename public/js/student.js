'use strict';
// Buttons are disabled upon page load
$("#add-grade").attr('disabled', 'true');
$("#calculate-average").attr('disabled', 'true');

// Adding Listeners
var saveButton = $("#save-name");
saveButton.click('click', getName);

var addAndContinue = $("#add-grade");
addAndContinue.click('click', addSubject);

var addAndCalculate = $("#calculate-average");
addAndCalculate.click('click', calculateAverage);



// getting name value and sending it to the variable student.name to store it
function getName (event){
	var students = " ";
	var student_name = $("#student-name").value;
	student_name = student.name 
	// enabling buttons when value is entered into name field
	$("#add-grade").removeAttr('disabled');
	$("#calculate-average").removeAttr('disabled');
	$("#student-name").text(student.name);
}


function addSubject (event){
	var subjectName = "";
	//calling subject field; saving the value as a string and sending to subject.name
	subjectName = $("#subject").val();
	$("#subject").val("");
	var grade = "";
	//calling grade field; saving the value (as a number) as a string
	grade = parseInt($("#grade").val());
	$("#grade").val("");
	// sending grade to the table
	$("#grades").html($("#grades").html() + "<tr><td>" + subjectName 
	+ "</td><td>" + grade + "</td></tr>");
	//sending subject name and grade in the () to the addSubject function in the student variable
	student.addSubject(subjectName, grade); 
}

function calculateAverage (event){
	//this adds what is in the fields when you click add and calculate button; 
	//otherwise it won't take the data in subj and grade fields	
	addSubject()
	var average = student.calculateAverage()
	$("#student-average").text(average);
	//if statement evaluating wether the great is awesome or not
	if (student.isAwesome()) {
			$("#student-awesome").removeAttr('class');
		} else {
			$("#student-practice").removeAttr('class');
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