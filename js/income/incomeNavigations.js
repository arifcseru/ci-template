/**
 * Class : incomeNavigations (incomeNavigations JS)
 * Income Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/income/incomeNavigations.js
function loadIncomeListUI() {

	var url =  baseHref+"income/list";
	
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
	commonScreenRenderer(url, "#incomeContainer");
}
function loadIncomeFormUI() {
	var url =  baseHref+"income/form";// basicSetup/income/incomeForm

	commonScreenRenderer(url, "#incomeContainer");
}
function loadIncomeFormUIToView(id) {
	var url =  baseHref+"income/view/" + id;

	commonScreenRenderer(url, "#incomeContainer");
}
function loadIncomeFormUIToEdit(id) {
	var url =  baseHref+"income/form/" + id;

	commonScreenRenderer(url, "#incomeContainer");
}

$(document).ready(function() {
	//loadIncomeListUI();
});

