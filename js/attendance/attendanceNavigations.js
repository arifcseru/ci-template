/**
 * Class : attendanceNavigations (attendanceNavigations JS)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/attendance/attendanceNavigations.js
function loadAttendanceListUI() {

	var url =  "/template/attendance/list";
	
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
	commonScreenRenderer(url, "#attendanceContainer");
}
function loadAttendanceFormUI() {
	var url =  "/template/attendance/form";// basicSetup/attendance/attendanceForm

	commonScreenRenderer(url, "#attendanceContainer");
}
function loadAttendanceFormUIToView(id) {
	var url =  "/template/attendance/view/" + id;

	commonScreenRenderer(url, "#attendanceContainer");
}
function loadAttendanceFormUIToEdit(id) {
	var url =  "/template/attendance/form/" + id;

	commonScreenRenderer(url, "#attendanceContainer");
}

$(document).ready(function() {
	//loadAttendanceListUI();
});

