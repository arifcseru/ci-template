/**
 * Class : attendanceInfoActions.js (Actions js are here)
 * Attendance Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////attendanceInfoActions.js

function loadAttendanceInfoFormDialog(){
    var title = 'Attendance Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"attendanceInfo";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editAttendanceInfoFormDialog(id){
    var title = 'Attendance Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"attendanceInfo/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadAttendanceInfoFormScreen(){
    var url =  baseHref+"attendanceInfo";
    commonScreenRenderer(url, "#attendanceInfoContainer");
}
function editAttendanceInfoFormScreen(id){
    var url =  baseHref+"attendanceInfo/"+id;
    commonScreenRenderer(url, "#attendanceInfoContainer");
}
function viewAttendanceInfoFormScreen(id){
    var url =  baseHref+"attendanceInfoViewForm/"+id;
    commonScreenRenderer(url, "#attendanceInfoContainer");
}



function loadAttendanceInfoForm(){
    hideValidationMessages();
    initializeAttendanceInfoForm();
    $('#attendanceInfo_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeAttendanceInfoForm(){
    $("#attendanceInfo_id").val('');
    // jsInputFieldInitialization
}

function editAttendanceInfoForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getAttendanceInfo/" + id,
        cache : false,
        success : function(attendanceInfo) {
            $("#attendanceInfo_id").val(attendanceInfo.id);
            // jsInputFieldAssignment
            //$('#attendanceInfo_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveAttendanceInfo() {
    hideValidationMessages();
    
    
    var attendanceInfo = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),attendanceDate : $("#attendanceDate").val(),description : $("#description").val(),supervisorId : $("#supervisorId").val(),
    };
    var url =  baseHref+"attendanceInfo/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : attendanceInfo,
        success : function(data) {
        	$('#attendanceInfoContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveAttendanceInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"attendanceInfo/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#attendanceInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteAttendanceInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"attendanceInfo/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#attendanceInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}