/**
 * Class : jobPostingNavigations (jobPostingNavigations JS)
 * Job Posting Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/jobPosting/jobPostingNavigations.js
function loadJobPostingListUI() {

	var url =  baseHref+"jobPosting/list";
	
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
	commonScreenRenderer(url, "#jobPostingContainer");
}
function loadJobPostingFormUI() {
	var url =  baseHref+"jobPosting/form";// basicSetup/jobPosting/jobPostingForm

	commonScreenRenderer(url, "#jobPostingContainer");
}
function loadJobPostingFormUIToView(id) {
	var url =  baseHref+"jobPosting/view/" + id;

	commonScreenRenderer(url, "#jobPostingContainer");
}
function loadJobPostingFormUIToEdit(id) {
	var url =  baseHref+"jobPosting/form/" + id;

	commonScreenRenderer(url, "#jobPostingContainer");
}

$(document).ready(function() {
	//loadJobPostingListUI();
});

