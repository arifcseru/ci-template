/**
 * Class : leaveRequestNavigations (leaveRequestNavigations JS)
 * Leave Request Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/leaveRequest/leaveRequestNavigations.js
function loadLeaveRequestListUI() {

	var url =  baseHref+"leaveRequest/list";
	
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
	commonScreenRenderer(url, "#leaveRequestContainer");
}
function loadLeaveRequestFormUI() {
	var url =  baseHref+"leaveRequest/form";// basicSetup/leaveRequest/leaveRequestForm

	commonScreenRenderer(url, "#leaveRequestContainer");
}
function loadLeaveRequestFormUIToView(id) {
	var url =  baseHref+"leaveRequest/view/" + id;

	commonScreenRenderer(url, "#leaveRequestContainer");
}
function loadLeaveRequestFormUIToEdit(id) {
	var url =  baseHref+"leaveRequest/form/" + id;

	commonScreenRenderer(url, "#leaveRequestContainer");
}

$(document).ready(function() {
	//loadLeaveRequestListUI();
});

