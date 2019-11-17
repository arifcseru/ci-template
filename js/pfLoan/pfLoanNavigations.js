/**
 * Class : pfLoanNavigations (pfLoanNavigations JS)
 * Pf Loan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/pfLoan/pfLoanNavigations.js
function loadPfLoanListUI() {

	var url =  baseHref+"pfLoan/list";
	
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
	commonScreenRenderer(url, "#pfLoanContainer");
}
function loadPfLoanFormUI() {
	var url =  baseHref+"pfLoan/form";// basicSetup/pfLoan/pfLoanForm

	commonScreenRenderer(url, "#pfLoanContainer");
}
function loadPfLoanFormUIToView(id) {
	var url =  baseHref+"pfLoan/view/" + id;

	commonScreenRenderer(url, "#pfLoanContainer");
}
function loadPfLoanFormUIToEdit(id) {
	var url =  baseHref+"pfLoan/form/" + id;

	commonScreenRenderer(url, "#pfLoanContainer");
}

$(document).ready(function() {
	//loadPfLoanListUI();
});

