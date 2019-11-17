/**
 * Class : holidayTypeActions.js (Actions js are here)
 * Holiday Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////holidayTypeActions.js

function loadHolidayTypeFormDialog(){
    var title = 'Holiday Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"holidayType";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editHolidayTypeFormDialog(id){
    var title = 'Holiday Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"holidayType/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadHolidayTypeFormScreen(){
    var url =  baseHref+"holidayType";
    commonScreenRenderer(url, "#holidayTypeContainer");
}
function editHolidayTypeFormScreen(id){
    var url =  baseHref+"holidayType/"+id;
    commonScreenRenderer(url, "#holidayTypeContainer");
}
function viewHolidayTypeFormScreen(id){
    var url =  baseHref+"holidayTypeViewForm/"+id;
    commonScreenRenderer(url, "#holidayTypeContainer");
}



function loadHolidayTypeForm(){
    hideValidationMessages();
    initializeHolidayTypeForm();
    $('#holidayType_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeHolidayTypeForm(){
    $("#holidayType_id").val('');
    // jsInputFieldInitialization
}

function editHolidayTypeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getHolidayType/" + id,
        cache : false,
        success : function(holidayType) {
            $("#holidayType_id").val(holidayType.id);
            // jsInputFieldAssignment
            //$('#holidayType_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveHolidayType() {
    hideValidationMessages();
    
    
    var holidayType = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),
    };
    var url =  baseHref+"holidayType/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : holidayType,
        success : function(data) {
        	$('#holidayTypeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveHolidayType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"holidayType/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#holidayTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteHolidayType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"holidayType/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#holidayTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}