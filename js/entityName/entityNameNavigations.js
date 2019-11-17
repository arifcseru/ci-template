/**
 * Class : entityNameNavigations (entityNameNavigations JS)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/entityName/entityNameNavigations.js
function loadEntityNameListUI() {

	var url =  "/template/entityName/list";
	
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
	commonScreenRenderer(url, "#entityNameContainer");
}
function loadEntityNameFormUI() {
	var url =  "/template/entityName/form";// basicSetup/entityName/entityNameForm

	commonScreenRenderer(url, "#entityNameContainer");
}
function loadEntityNameFormUIToView(id) {
	var url =  "/template/entityName/view/" + id;

	commonScreenRenderer(url, "#entityNameContainer");
}
function loadEntityNameFormUIToEdit(id) {
	var url =  "/template/entityName/form/" + id;

	commonScreenRenderer(url, "#entityNameContainer");
}

$(document).ready(function() {
	//loadEntityNameListUI();
});

