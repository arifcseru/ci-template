/**
 * Class : leaveTypeNavigations (leaveTypeNavigations JS)
 * Leave Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/leaveType/leaveTypeNavigations.js
function loadLeaveTypeListUI() {

	var url =  baseHref+"leaveType/list";
	
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
	commonScreenRenderer(url, "#leaveTypeContainer");
}
function loadLeaveTypeFormUI() {
	var url =  baseHref+"leaveType/form";// basicSetup/leaveType/leaveTypeForm

	commonScreenRenderer(url, "#leaveTypeContainer");
}
function loadLeaveTypeFormUIToView(id) {
	var url =  baseHref+"leaveType/view/" + id;

	commonScreenRenderer(url, "#leaveTypeContainer");
}
function loadLeaveTypeFormUIToEdit(id) {
	var url =  baseHref+"leaveType/form/" + id;

	commonScreenRenderer(url, "#leaveTypeContainer");
}

$(document).ready(function() {
	//loadLeaveTypeListUI();
});

