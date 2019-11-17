/**
 * Class : incomeTypeNavigations (incomeTypeNavigations JS)
 * Income Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/incomeType/incomeTypeNavigations.js
function loadIncomeTypeListUI() {

	var url =  baseHref+"incomeType/list";
	
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
	commonScreenRenderer(url, "#incomeTypeContainer");
}
function loadIncomeTypeFormUI() {
	var url =  baseHref+"incomeType/form";// basicSetup/incomeType/incomeTypeForm

	commonScreenRenderer(url, "#incomeTypeContainer");
}
function loadIncomeTypeFormUIToView(id) {
	var url =  baseHref+"incomeType/view/" + id;

	commonScreenRenderer(url, "#incomeTypeContainer");
}
function loadIncomeTypeFormUIToEdit(id) {
	var url =  baseHref+"incomeType/form/" + id;

	commonScreenRenderer(url, "#incomeTypeContainer");
}

$(document).ready(function() {
	//loadIncomeTypeListUI();
});

