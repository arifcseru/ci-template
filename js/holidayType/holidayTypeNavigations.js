/**
 * Class : holidayTypeNavigations (holidayTypeNavigations JS)
 * Holiday Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/holidayType/holidayTypeNavigations.js
function loadHolidayTypeListUI() {

	var url =  baseHref+"holidayType/listData";
	
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
	commonScreenRenderer(url, "#holidayTypeContainer");
}
function loadHolidayTypeFormUI() {
	var url =  baseHref+"holidayType/form";// basicSetup/holidayType/holidayTypeForm

	commonScreenRenderer(url, "#holidayTypeContainer");
}
function loadHolidayTypeFormUIToView(id) {
	var url =  baseHref+"holidayType/view/" + id;

	commonScreenRenderer(url, "#holidayTypeContainer");
}
function loadHolidayTypeFormUIToEdit(id) {
	var url =  baseHref+"holidayType/form/" + id;

	commonScreenRenderer(url, "#holidayTypeContainer");
}

$(document).ready(function() {
	//loadHolidayTypeListUI();
});

