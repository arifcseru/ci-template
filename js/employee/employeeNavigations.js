/**
 * Class : employeeNavigations (employeeNavigations JS)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/employee/employeeNavigations.js
function loadEmployeeListUI() {

	var url =  baseHref+"employee/list";
	
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
	commonScreenRenderer(url, "#employeeContainer");
}
function loadEmployeeFormUI() {
	var url =  baseHref+"employee/form";// basicSetup/employee/employeeForm

	commonScreenRenderer(url, "#employeeContainer");
}
function loadEmployeeFormUIToView(id) {
	var url =  baseHref+"employee/view/" + id;

	commonScreenRenderer(url, "#employeeContainer");
}
function loadEmployeeFormUIToEdit(id) {
	var url =  baseHref+"employee/form/" + id;

	commonScreenRenderer(url, "#employeeContainer");
}

$(document).ready(function() {
	//loadEmployeeListUI();
});

