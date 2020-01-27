/**
 * Class : disciplinaryCasesNavigations (disciplinaryCasesNavigations JS)
 * Disciplinary Cases Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/disciplinaryCases/disciplinaryCasesNavigations.js
function loadDisciplinaryCasesListUI() {

	var url =  baseHref+"disciplinaryCases/listData";
	
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
	commonScreenRenderer(url, "#disciplinaryCasesContainer");
}
function loadDisciplinaryCasesFormUI() {
	var url =  baseHref+"disciplinaryCases/form";// basicSetup/disciplinaryCases/disciplinaryCasesForm

	commonScreenRenderer(url, "#disciplinaryCasesContainer");
}
function loadDisciplinaryCasesFormUIToView(id) {
	var url =  baseHref+"disciplinaryCases/view/" + id;

	commonScreenRenderer(url, "#disciplinaryCasesContainer");
}
function loadDisciplinaryCasesFormUIToEdit(id) {
	var url =  baseHref+"disciplinaryCases/form/" + id;

	commonScreenRenderer(url, "#disciplinaryCasesContainer");
}

$(document).ready(function() {
	//loadDisciplinaryCasesListUI();
});

