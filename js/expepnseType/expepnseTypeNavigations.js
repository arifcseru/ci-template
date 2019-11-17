/**
 * Class : expepnseTypeNavigations (expepnseTypeNavigations JS)
 * Expepnse Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/expepnseType/expepnseTypeNavigations.js
function loadExpepnseTypeListUI() {

	var url =  baseHref+"expepnseType/list";
	
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
	commonScreenRenderer(url, "#expepnseTypeContainer");
}
function loadExpepnseTypeFormUI() {
	var url =  baseHref+"expepnseType/form";// basicSetup/expepnseType/expepnseTypeForm

	commonScreenRenderer(url, "#expepnseTypeContainer");
}
function loadExpepnseTypeFormUIToView(id) {
	var url =  baseHref+"expepnseType/view/" + id;

	commonScreenRenderer(url, "#expepnseTypeContainer");
}
function loadExpepnseTypeFormUIToEdit(id) {
	var url =  baseHref+"expepnseType/form/" + id;

	commonScreenRenderer(url, "#expepnseTypeContainer");
}

$(document).ready(function() {
	//loadExpepnseTypeListUI();
});

