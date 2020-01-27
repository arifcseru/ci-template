/**
 * Class : trainingInfoNavigations (trainingInfoNavigations JS)
 * Training Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */

// /aider/src/main/resources/static/js/trainingInfo/trainingInfoNavigations.js
function loadTrainingInfoListUI() {

	var url =  baseHref+"trainingInfo/listData";
	
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
	commonScreenRenderer(url, "#trainingInfoContainer");
}
function loadTrainingInfoFormUI() {
	var url =  baseHref+"trainingInfo/form";// basicSetup/trainingInfo/trainingInfoForm

	commonScreenRenderer(url, "#trainingInfoContainer");
}
function loadTrainingInfoFormUIToView(id) {
	var url =  baseHref+"trainingInfo/view/" + id;

	commonScreenRenderer(url, "#trainingInfoContainer");
}
function loadTrainingInfoFormUIToEdit(id) {
	var url =  baseHref+"trainingInfo/form/" + id;

	commonScreenRenderer(url, "#trainingInfoContainer");
}

$(document).ready(function() {
	//loadTrainingInfoListUI();
});

