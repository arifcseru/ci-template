/**
 * Class : companyBalanceNavigations (companyBalanceNavigations JS)
 * Company Balance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/companyBalance/companyBalanceNavigations.js
function loadCompanyBalanceListUI() {

	var url =  baseHref+"companyBalance/listData";
	
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
	commonScreenRenderer(url, "#companyBalanceContainer");
}
function loadCompanyBalanceFormUI() {
	var url =  baseHref+"companyBalance/form";// basicSetup/companyBalance/companyBalanceForm

	commonScreenRenderer(url, "#companyBalanceContainer");
}
function loadCompanyBalanceFormUIToView(id) {
	var url =  baseHref+"companyBalance/view/" + id;

	commonScreenRenderer(url, "#companyBalanceContainer");
}
function loadCompanyBalanceFormUIToEdit(id) {
	var url =  baseHref+"companyBalance/form/" + id;

	commonScreenRenderer(url, "#companyBalanceContainer");
}

$(document).ready(function() {
	//loadCompanyBalanceListUI();
});

