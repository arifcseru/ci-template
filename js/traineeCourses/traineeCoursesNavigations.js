/**
 * Class : traineeCoursesNavigations (traineeCoursesNavigations JS)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/traineeCourses/traineeCoursesNavigations.js
function loadTraineeCoursesListUI() {

	var url =  baseHref+"traineeCourses/list";
	
	/*var fromDate = $("#fromDate").val();
	var toDate = $("#toDate").val();
	var isApproved = $("#isApproved").val();
	
	if (fromDate!="" && fromDate!=undefined 
			&& toDate!="" && toDate!=undefined) {
		url +=  "?fromDate="+fromDate+"&toDate="+toDate+"&isApproved="+isApproved;
	}*/
	/*else if (fromDate!="" && toDate=="") {
		url +=  "?fromDate="+fromDate+"&toDate=null";
	}else if (fromDate=="" && toDate!="") {
		url +=  "?fromDate=null&toDate="+toDate;
	}*/
	commonScreenRenderer(url, "#traineeCoursesContainer");
}
function loadTraineeCoursesFormUI() {
	var url =  baseHref+"traineeCourses/form";// basicSetup/traineeCourses/traineeCoursesForm

	commonScreenRenderer(url, "#traineeCoursesContainer");
}
function loadTraineeCoursesFormUIToView(id) {
	var url =  baseHref+"traineeCourses/view/" + id;

	commonScreenRenderer(url, "#traineeCoursesContainer");
}
function loadTraineeCoursesFormUIToEdit(id) {
	var url =  baseHref+"traineeCourses/form/" + id;

	commonScreenRenderer(url, "#traineeCoursesContainer");
}

$(document).ready(function() {
	//loadTraineeCoursesListUI();
});

