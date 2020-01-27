/**
 * Class : jobPositionNavigations (jobPositionNavigations JS)
 * Job Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/jobPosition/jobPositionNavigations.js
function loadJobPositionListUI() {

	var url =  baseHref+"jobPosition/listData";
	
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
	commonScreenRenderer(url, "#jobPositionContainer");
}
function loadJobPositionFormUI() {
	var url =  baseHref+"jobPosition/form";// basicSetup/jobPosition/jobPositionForm

	commonScreenRenderer(url, "#jobPositionContainer");
}
function loadJobPositionFormUIToView(id) {
	var url =  baseHref+"jobPosition/view/" + id;

	commonScreenRenderer(url, "#jobPositionContainer");
}
function loadJobPositionFormUIToEdit(id) {
	var url =  baseHref+"jobPosition/form/" + id;

	commonScreenRenderer(url, "#jobPositionContainer");
}

$(document).ready(function() {
	//loadJobPositionListUI();
});

