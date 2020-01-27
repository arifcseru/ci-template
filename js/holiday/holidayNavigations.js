/**
 * Class : holidayNavigations (holidayNavigations JS)
 * Holiday Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/holiday/holidayNavigations.js
function loadHolidayListUI() {

	var url =  baseHref+"holiday/listData";
	
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
	commonScreenRenderer(url, "#holidayContainer");
}
function loadHolidayFormUI() {
	var url =  baseHref+"holiday/form";// basicSetup/holiday/holidayForm

	commonScreenRenderer(url, "#holidayContainer");
}
function loadHolidayFormUIToView(id) {
	var url =  baseHref+"holiday/view/" + id;

	commonScreenRenderer(url, "#holidayContainer");
}
function loadHolidayFormUIToEdit(id) {
	var url =  baseHref+"holiday/form/" + id;

	commonScreenRenderer(url, "#holidayContainer");
}

$(document).ready(function() {
	//loadHolidayListUI();
});

