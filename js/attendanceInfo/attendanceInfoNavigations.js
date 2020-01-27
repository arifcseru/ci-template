/**
 * Class : attendanceInfoNavigations (attendanceInfoNavigations JS)
 * Attendance Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/attendanceInfo/attendanceInfoNavigations.js
function loadAttendanceInfoListUI() {

	var url =  baseHref+"attendanceInfo/listData";
	
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
	commonScreenRenderer(url, "#attendanceInfoContainer");
}
function loadAttendanceInfoFormUI() {
	var url =  baseHref+"attendanceInfo/form";// basicSetup/attendanceInfo/attendanceInfoForm

	commonScreenRenderer(url, "#attendanceInfoContainer");
}
function loadAttendanceInfoFormUIToView(id) {
	var url =  baseHref+"attendanceInfo/view/" + id;

	commonScreenRenderer(url, "#attendanceInfoContainer");
}
function loadAttendanceInfoFormUIToEdit(id) {
	var url =  baseHref+"attendanceInfo/form/" + id;

	commonScreenRenderer(url, "#attendanceInfoContainer");
}

$(document).ready(function() {
	//loadAttendanceInfoListUI();
});

