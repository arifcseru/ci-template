/**
 * Class : branchNavigations (branchNavigations JS)
 * Branch Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/branch/branchNavigations.js
function loadBranchListUI() {

	var url =  baseHref+"branch/listData";
	
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
	commonScreenRenderer(url, "#branchContainer");
}
function loadBranchFormUI() {
	var url =  baseHref+"branch/form";// basicSetup/branch/branchForm

	commonScreenRenderer(url, "#branchContainer");
}
function loadBranchFormUIToView(id) {
	var url =  baseHref+"branch/view/" + id;

	commonScreenRenderer(url, "#branchContainer");
}
function loadBranchFormUIToEdit(id) {
	var url =  baseHref+"branch/form/" + id;

	commonScreenRenderer(url, "#branchContainer");
}

$(document).ready(function() {
	//loadBranchListUI();
});

