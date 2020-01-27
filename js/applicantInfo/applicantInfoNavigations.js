/**
 * Class : applicantInfoNavigations (applicantInfoNavigations JS)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/applicantInfo/applicantInfoNavigations.js
function loadApplicantInfoListUI() {

	var url =  baseHref+"applicantInfo/listData";
	
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
	commonScreenRenderer(url, "#applicantInfoContainer");
}
function loadApplicantInfoFormUI() {
	var url =  baseHref+"applicantInfo/form";// basicSetup/applicantInfo/applicantInfoForm

	commonScreenRenderer(url, "#applicantInfoContainer");
}
function loadApplicantInfoFormUIToView(id) {
	var url =  baseHref+"applicantInfo/view/" + id;

	commonScreenRenderer(url, "#applicantInfoContainer");
}
function loadApplicantInfoFormUIToEdit(id) {
	var url =  baseHref+"applicantInfo/form/" + id;

	commonScreenRenderer(url, "#applicantInfoContainer");
}

$(document).ready(function() {
	//loadApplicantInfoListUI();
});

