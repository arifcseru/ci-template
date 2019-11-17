/**
 * Class : empTrainingNavigations (empTrainingNavigations JS)
 * Emp Training Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/empTraining/empTrainingNavigations.js
function loadEmpTrainingListUI() {

	var url =  baseHref+"empTraining/list";
	
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
	commonScreenRenderer(url, "#empTrainingContainer");
}
function loadEmpTrainingFormUI() {
	var url =  baseHref+"empTraining/form";// basicSetup/empTraining/empTrainingForm

	commonScreenRenderer(url, "#empTrainingContainer");
}
function loadEmpTrainingFormUIToView(id) {
	var url =  baseHref+"empTraining/view/" + id;

	commonScreenRenderer(url, "#empTrainingContainer");
}
function loadEmpTrainingFormUIToEdit(id) {
	var url =  baseHref+"empTraining/form/" + id;

	commonScreenRenderer(url, "#empTrainingContainer");
}

$(document).ready(function() {
	//loadEmpTrainingListUI();
});

