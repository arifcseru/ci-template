/**
 * Class : userNavigations (userNavigations JS)
 * User Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/user/userNavigations.js
function loadUserListUI() {

	var url =  baseHref+"user/listData";
	
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
	commonScreenRenderer(url, "#userContainer");
}
function loadUserFormUI() {
	var url =  baseHref+"user/form";// basicSetup/user/userForm

	commonScreenRenderer(url, "#userContainer");
}
function loadUserFormUIToView(id) {
	var url =  baseHref+"user/view/" + id;

	commonScreenRenderer(url, "#userContainer");
}
function loadUserFormUIToEdit(id) {
	var url =  baseHref+"user/form/" + id;

	commonScreenRenderer(url, "#userContainer");
}

$(document).ready(function() {
	//loadUserListUI();
});

