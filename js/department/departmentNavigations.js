/**
 * Class : departmentNavigations (departmentNavigations JS)
 * Department Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/department/departmentNavigations.js
function loadDepartmentListUI() {

	var url =  baseHref+"department/list";
	
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
	commonScreenRenderer(url, "#departmentContainer");
}
function loadDepartmentFormUI() {
	var url =  baseHref+"department/form";// basicSetup/department/departmentForm

	commonScreenRenderer(url, "#departmentContainer");
}
function loadDepartmentFormUIToView(id) {
	var url =  baseHref+"department/view/" + id;

	commonScreenRenderer(url, "#departmentContainer");
}
function loadDepartmentFormUIToEdit(id) {
	var url =  baseHref+"department/form/" + id;

	commonScreenRenderer(url, "#departmentContainer");
}

$(document).ready(function() {
	//loadDepartmentListUI();
});

