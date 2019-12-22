/**
 * Class : userPreferenceNavigations (userPreferenceNavigations JS)
 * User Preference Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/userPreference/userPreferenceNavigations.js
function loadUserPreferenceListUI() {

	var url =  baseHref+"userPreference/list";
	
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
	commonScreenRenderer(url, "#userPreferenceContainer");
}
function loadUserPreferenceFormUI() {
	var url =  baseHref+"userPreference/form";// basicSetup/userPreference/userPreferenceForm

	commonScreenRenderer(url, "#userPreferenceContainer");
}
function loadUserPreferenceFormUIToView(id) {
	var url =  baseHref+"userPreference/view/" + id;

	commonScreenRenderer(url, "#userPreferenceContainer");
}
function loadUserPreferenceFormUIToEdit(id) {
	var url =  baseHref+"userPreference/form/" + id;

	commonScreenRenderer(url, "#userPreferenceContainer");
}

$(document).ready(function() {
	//loadUserPreferenceListUI();
	loadUserPreferenceFormUIToEdit(1);
});

