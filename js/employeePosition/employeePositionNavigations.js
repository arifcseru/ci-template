/**
 * Class : employeePositionNavigations (employeePositionNavigations JS)
 * Employee Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/employeePosition/employeePositionNavigations.js
function loadEmployeePositionListUI() {

	var url =  baseHref+"employeePosition/list";
	
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
	commonScreenRenderer(url, "#employeePositionContainer");
}
function loadEmployeePositionFormUI() {
	var url =  baseHref+"employeePosition/form";// basicSetup/employeePosition/employeePositionForm

	commonScreenRenderer(url, "#employeePositionContainer");
}
function loadEmployeePositionFormUIToView(id) {
	var url =  baseHref+"employeePosition/view/" + id;

	commonScreenRenderer(url, "#employeePositionContainer");
}
function loadEmployeePositionFormUIToEdit(id) {
	var url =  baseHref+"employeePosition/form/" + id;

	commonScreenRenderer(url, "#employeePositionContainer");
}

$(document).ready(function() {
	//loadEmployeePositionListUI();
});

