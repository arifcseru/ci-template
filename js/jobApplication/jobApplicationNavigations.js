/**
 * Class : jobApplicationNavigations (jobApplicationNavigations JS)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/jobApplication/jobApplicationNavigations.js
function loadJobApplicationListUI() {

	var url =  baseHref+"jobApplication/list";
	
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
	commonScreenRenderer(url, "#jobApplicationContainer");
}
function loadJobApplicationFormUI() {
	var url =  baseHref+"jobApplication/form";// basicSetup/jobApplication/jobApplicationForm

	commonScreenRenderer(url, "#jobApplicationContainer");
}
function loadJobApplicationFormUIToView(id) {
	var url =  baseHref+"jobApplication/view/" + id;

	commonScreenRenderer(url, "#jobApplicationContainer");
}
function loadJobApplicationFormUIToEdit(id) {
	var url =  baseHref+"jobApplication/form/" + id;

	commonScreenRenderer(url, "#jobApplicationContainer");
}

$(document).ready(function() {
	//loadJobApplicationListUI();
});

