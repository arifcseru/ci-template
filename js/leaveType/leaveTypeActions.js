/**
 * Class : leaveTypeActions.js (Actions js are here)
 * Leave Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////leaveTypeActions.js

function loadLeaveTypeFormDialog(){
    var title = 'Leave Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"leaveType";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editLeaveTypeFormDialog(id){
    var title = 'Leave Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"leaveType/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadLeaveTypeFormScreen(){
    var url =  baseHref+"leaveType";
    commonScreenRenderer(url, "#leaveTypeContainer");
}
function editLeaveTypeFormScreen(id){
    var url =  baseHref+"leaveType/"+id;
    commonScreenRenderer(url, "#leaveTypeContainer");
}
function viewLeaveTypeFormScreen(id){
    var url =  baseHref+"leaveTypeViewForm/"+id;
    commonScreenRenderer(url, "#leaveTypeContainer");
}



function loadLeaveTypeForm(){
    hideValidationMessages();
    initializeLeaveTypeForm();
    $('#leaveType_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeLeaveTypeForm(){
    $("#leaveType_id").val('');
    // jsInputFieldInitialization
}

function editLeaveTypeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getLeaveType/" + id,
        cache : false,
        success : function(leaveType) {
            $("#leaveType_id").val(leaveType.id);
            // jsInputFieldAssignment
            //$('#leaveType_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveLeaveType() {
    hideValidationMessages();
    
    
    var leaveType = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),
    };
    var url =  baseHref+"leaveType/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : leaveType,
        success : function(data) {
        	$('#leaveTypeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveLeaveType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"leaveType/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#leaveTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteLeaveType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"leaveType/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#leaveTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}