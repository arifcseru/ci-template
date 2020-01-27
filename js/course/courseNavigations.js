/**
 * Class : courseNavigations (courseNavigations JS)
 * Course Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/course/courseNavigations.js
function loadCourseListUI() {

	var url =  baseHref+"course/listData";
	
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
	commonScreenRenderer(url, "#courseContainer");
}
function loadCourseFormUI() {
	var url =  baseHref+"course/form";// basicSetup/course/courseForm

	commonScreenRenderer(url, "#courseContainer");
}
function loadCourseFormUIToView(id) {
	var url =  baseHref+"course/view/" + id;

	commonScreenRenderer(url, "#courseContainer");
}
function loadCourseFormUIToEdit(id) {
	var url =  baseHref+"course/form/" + id;

	commonScreenRenderer(url, "#courseContainer");
}

$(document).ready(function() {
	//loadCourseListUI();
});

