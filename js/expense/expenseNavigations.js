/**
 * Class : expenseNavigations (expenseNavigations JS)
 * Expense Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/expense/expenseNavigations.js
function loadExpenseListUI() {

	var url =  baseHref+"expense/list";
	
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
	commonScreenRenderer(url, "#expenseContainer");
}
function loadExpenseFormUI() {
	var url =  baseHref+"expense/form";// basicSetup/expense/expenseForm

	commonScreenRenderer(url, "#expenseContainer");
}
function loadExpenseFormUIToView(id) {
	var url =  baseHref+"expense/view/" + id;

	commonScreenRenderer(url, "#expenseContainer");
}
function loadExpenseFormUIToEdit(id) {
	var url =  baseHref+"expense/form/" + id;

	commonScreenRenderer(url, "#expenseContainer");
}

$(document).ready(function() {
	//loadExpenseListUI();
});

