/**
 * Class : holidayActions.js (Actions js are here)
 * Holiday Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////holidayActions.js

function loadHolidayFormDialog(){
    var title = 'Holiday';
    var containerId = '#commonPopup';
    var url =  baseHref+"holiday";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editHolidayFormDialog(id){
    var title = 'Holiday';
    var containerId = '#commonPopup';
    var url =  baseHref+"holiday/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadHolidayFormScreen(){
    var url =  baseHref+"holiday";
    commonScreenRenderer(url, "#holidayContainer");
}
function editHolidayFormScreen(id){
    var url =  baseHref+"holiday/"+id;
    commonScreenRenderer(url, "#holidayContainer");
}
function viewHolidayFormScreen(id){
    var url =  baseHref+"holidayViewForm/"+id;
    commonScreenRenderer(url, "#holidayContainer");
}



function loadHolidayForm(){
    hideValidationMessages();
    initializeHolidayForm();
    $('#holiday_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeHolidayForm(){
    $("#holiday_id").val('');
    // jsInputFieldInitialization
}

function editHolidayForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getHoliday/" + id,
        cache : false,
        success : function(holiday) {
            $("#holiday_id").val(holiday.id);
            // jsInputFieldAssignment
            //$('#holiday_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveHoliday() {
    hideValidationMessages();
    
    
    var holiday = {
        id : $("#id").val(),
        title : $("#title").val(),description : $("#description").val(),holidayTypeId : $("#holidayTypeId").val(),fromDate : $("#fromDate").val(),thruDate : $("#thruDate").val(),
    };
    var url =  baseHref+"holiday/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : holiday,
        success : function(data) {
        	$('#holidayContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveHoliday(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"holiday/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#holidayContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteHoliday(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"holiday/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#holidayContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}