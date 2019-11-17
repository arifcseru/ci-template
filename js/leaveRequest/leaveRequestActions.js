/**
 * Class : leaveRequestActions.js (Actions js are here)
 * Leave Request Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////leaveRequestActions.js

function loadLeaveRequestFormDialog(){
    var title = 'Leave Request';
    var containerId = '#commonPopup';
    var url =  baseHref+"leaveRequest";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editLeaveRequestFormDialog(id){
    var title = 'Leave Request';
    var containerId = '#commonPopup';
    var url =  baseHref+"leaveRequest/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadLeaveRequestFormScreen(){
    var url =  baseHref+"leaveRequest";
    commonScreenRenderer(url, "#leaveRequestContainer");
}
function editLeaveRequestFormScreen(id){
    var url =  baseHref+"leaveRequest/"+id;
    commonScreenRenderer(url, "#leaveRequestContainer");
}
function viewLeaveRequestFormScreen(id){
    var url =  baseHref+"leaveRequestViewForm/"+id;
    commonScreenRenderer(url, "#leaveRequestContainer");
}



function loadLeaveRequestForm(){
    hideValidationMessages();
    initializeLeaveRequestForm();
    $('#leaveRequest_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeLeaveRequestForm(){
    $("#leaveRequest_id").val('');
    // jsInputFieldInitialization
}

function editLeaveRequestForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getLeaveRequest/" + id,
        cache : false,
        success : function(leaveRequest) {
            $("#leaveRequest_id").val(leaveRequest.id);
            // jsInputFieldAssignment
            //$('#leaveRequest_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveLeaveRequest() {
    hideValidationMessages();
    
    
    var leaveRequest = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),leaveTypeId : $("#leaveTypeId").val(),fromDate : $("#fromDate").val(),thruDate : $("#thruDate").val(),
    };
    var url =  baseHref+"leaveRequest/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : leaveRequest,
        success : function(data) {
        	$('#leaveRequestContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveLeaveRequest(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"leaveRequest/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#leaveRequestContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteLeaveRequest(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"leaveRequest/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#leaveRequestContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}