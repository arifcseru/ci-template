/**
 * Class : frontPageNavigations (frontPageNavigations JS)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/frontPage/frontPageNavigations.js
function loadFrontPageListUI() {

	var url =  baseHref+"frontPage/listData";
	
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
	commonScreenRenderer(url, "#frontPageContainer");
}
function loadFrontPageFormUI() {
	var url =  baseHref+"frontPage/form";// basicSetup/frontPage/frontPageForm

	commonScreenRenderer(url, "#frontPageContainer");
}
function loadFrontPageFormUIToView(id) {
	var url =  baseHref+"frontPage/view/" + id;

	commonScreenRenderer(url, "#frontPageContainer");
}
function loadFrontPageFormUIToEdit(id) {
	var url =  baseHref+"frontPage/form/" + id;

	commonScreenRenderer(url, "#frontPageContainer");
}

$(document).ready(function() {
	//loadFrontPageListUI();
});

