/**
 * Class : roleNavigations (roleNavigations JS)
 * Role Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/role/roleNavigations.js
function loadRoleListUI() {

	var url =  baseHref+"role/list";
	
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
	commonScreenRenderer(url, "#roleContainer");
}
function loadRoleFormUI() {
	var url =  baseHref+"role/form";// basicSetup/role/roleForm

	commonScreenRenderer(url, "#roleContainer");
}
function loadRoleFormUIToView(id) {
	var url =  baseHref+"role/view/" + id;

	commonScreenRenderer(url, "#roleContainer");
}
function loadRoleFormUIToEdit(id) {
	var url =  baseHref+"role/form/" + id;

	commonScreenRenderer(url, "#roleContainer");
}

$(document).ready(function() {
	//loadRoleListUI();
});

