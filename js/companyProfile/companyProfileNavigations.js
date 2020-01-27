/**
 * Class : companyProfileNavigations (companyProfileNavigations JS)
 * Company Profile Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/companyProfile/companyProfileNavigations.js
function loadCompanyProfileListUI() {

	var url =  baseHref+"companyProfile/listData";
	
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
	commonScreenRenderer(url, "#companyProfileContainer");
}
function loadCompanyProfileFormUI() {
	var url =  baseHref+"companyProfile/form";// basicSetup/companyProfile/companyProfileForm

	commonScreenRenderer(url, "#companyProfileContainer");
}
function loadCompanyProfileFormUIToView(id) {
	var url =  baseHref+"companyProfile/view/" + id;

	commonScreenRenderer(url, "#companyProfileContainer");
}
function loadCompanyProfileFormUIToEdit(id) {
	var url =  baseHref+"companyProfile/form/" + id;

	commonScreenRenderer(url, "#companyProfileContainer");
}

$(document).ready(function() {
	//loadCompanyProfileListUI();
});

