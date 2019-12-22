/**
 * Class : employeeSeparationNavigations (employeeSeparationNavigations JS)
 * Employee Separation Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/employeeSeparation/employeeSeparationNavigations.js
function loadEmployeeSeparationListUI() {

	var url =  baseHref+"employeeSeparation/list";
	
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
	commonScreenRenderer(url, "#employeeSeparationContainer");
}
function loadEmployeeSeparationFormUI() {
	var url =  baseHref+"employeeSeparation/form";// basicSetup/employeeSeparation/employeeSeparationForm

	commonScreenRenderer(url, "#employeeSeparationContainer");
}
function loadEmployeeSeparationFormUIToView(id) {
	var url =  baseHref+"employeeSeparation/view/" + id;

	commonScreenRenderer(url, "#employeeSeparationContainer");
}
function loadEmployeeSeparationFormUIToEdit(id) {
	var url =  baseHref+"employeeSeparation/form/" + id;

	commonScreenRenderer(url, "#employeeSeparationContainer");
}

$(document).ready(function() {
	//loadEmployeeSeparationListUI();
});

