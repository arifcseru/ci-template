/**
 * Class : providendFundNavigations (providendFundNavigations JS)
 * Providend Fund Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/providendFund/providendFundNavigations.js
function loadProvidendFundListUI() {

	var url =  baseHref+"providendFund/list";
	
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
	commonScreenRenderer(url, "#providendFundContainer");
}
function loadProvidendFundFormUI() {
	var url =  baseHref+"providendFund/form";// basicSetup/providendFund/providendFundForm

	commonScreenRenderer(url, "#providendFundContainer");
}
function loadProvidendFundFormUIToView(id) {
	var url =  baseHref+"providendFund/view/" + id;

	commonScreenRenderer(url, "#providendFundContainer");
}
function loadProvidendFundFormUIToEdit(id) {
	var url =  baseHref+"providendFund/form/" + id;

	commonScreenRenderer(url, "#providendFundContainer");
}

$(document).ready(function() {
	//loadProvidendFundListUI();
});

