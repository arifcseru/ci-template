/**
 * Class : employeeSalaryNavigations (employeeSalaryNavigations JS)
 * Employee Salary Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/employeeSalary/employeeSalaryNavigations.js
function loadEmployeeSalaryListUI() {

	var url =  baseHref+"employeeSalary/list";
	
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
	commonScreenRenderer(url, "#employeeSalaryContainer");
}
function loadEmployeeSalaryFormUI() {
	var url =  baseHref+"employeeSalary/form";// basicSetup/employeeSalary/employeeSalaryForm

	commonScreenRenderer(url, "#employeeSalaryContainer");
}
function loadEmployeeSalaryFormUIToView(id) {
	var url =  baseHref+"employeeSalary/view/" + id;

	commonScreenRenderer(url, "#employeeSalaryContainer");
}
function loadEmployeeSalaryFormUIToEdit(id) {
	var url =  baseHref+"employeeSalary/form/" + id;

	commonScreenRenderer(url, "#employeeSalaryContainer");
}

$(document).ready(function() {
	//loadEmployeeSalaryListUI();
});

