/**
 * Class : publicMenuNavigations (publicMenuNavigations JS)
 * Public Menu Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/publicMenu/publicMenuNavigations.js
function loadPublicMenuListUI() {

	var url =  baseHref+"publicMenu/listData";
	
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
	commonScreenRenderer(url, "#publicMenuContainer");
}
function loadPublicMenuFormUI() {
	var url =  baseHref+"publicMenu/form";// basicSetup/publicMenu/publicMenuForm

	commonScreenRenderer(url, "#publicMenuContainer");
}
function loadPublicMenuFormUIToView(id) {
	var url =  baseHref+"publicMenu/view/" + id;

	commonScreenRenderer(url, "#publicMenuContainer");
}
function loadPublicMenuFormUIToEdit(id) {
	var url =  baseHref+"publicMenu/form/" + id;

	commonScreenRenderer(url, "#publicMenuContainer");
}

$(document).ready(function() {
	//loadPublicMenuListUI();
});

