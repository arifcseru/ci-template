/**
 * Class : interviewInfoNavigations (interviewInfoNavigations JS)
 * Interview Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/interviewInfo/interviewInfoNavigations.js
function loadInterviewInfoListUI() {

	var url =  baseHref+"interviewInfo/list";
	
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
	commonScreenRenderer(url, "#interviewInfoContainer");
}
function loadInterviewInfoFormUI() {
	var url =  baseHref+"interviewInfo/form";// basicSetup/interviewInfo/interviewInfoForm

	commonScreenRenderer(url, "#interviewInfoContainer");
}
function loadInterviewInfoFormUIToView(id) {
	var url =  baseHref+"interviewInfo/view/" + id;

	commonScreenRenderer(url, "#interviewInfoContainer");
}
function loadInterviewInfoFormUIToEdit(id) {
	var url =  baseHref+"interviewInfo/form/" + id;

	commonScreenRenderer(url, "#interviewInfoContainer");
}

$(document).ready(function() {
	//loadInterviewInfoListUI();
});

