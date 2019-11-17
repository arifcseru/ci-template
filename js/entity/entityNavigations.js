// /aider/src/main/resources/static/js/entityName/entityNameNavigations.js
function loadEntityNameListUI() {

	var url =  "/moduleName/entityNameList";
	
	var fromDate = $("#fromDate").val();
	var toDate = $("#toDate").val();
	var isApproved = $("#isApproved").val();
	
	if (fromDate!="" && fromDate!=undefined 
			&& toDate!="" && toDate!=undefined) {
		url +=  "?fromDate="+fromDate+"&toDate="+toDate+"&isApproved="+isApproved;
	}
	/*else if (fromDate!="" && toDate=="") {
		url +=  "?fromDate="+fromDate+"&toDate=null";
	}else if (fromDate=="" && toDate!="") {
		url +=  "?fromDate=null&toDate="+toDate;
	}*/
	commonScreenRenderer(url, "#entityNameContainer");
}
function loadEntityNameFormUI() {
	var url =  "/moduleName/entityNameForm";// basicSetup/entityName/entityNameForm

	commonScreenRenderer(url, "#entityNameContainer");
}
function loadEntityNameFormUIToEdit(id) {
	var url =  "/moduleName/entityNameForm/" + id;

	commonScreenRenderer(url, "#entityNameContainer");
}

$(document).ready(function() {
	loadEntityNameListUI();
});

