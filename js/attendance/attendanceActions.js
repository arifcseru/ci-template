/**
 * Class : attendanceActions.js (Actions js are here)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////attendanceActions.js

function loadAttendanceFormDialog(){
    var title = 'Attendance';
    var containerId = '#commonPopup';
    var url =  "/template/attendance";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editAttendanceFormDialog(id){
    var title = 'Attendance';
    var containerId = '#commonPopup';
    var url =  "/template/attendance/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadAttendanceFormScreen(){
    var url =  "/template/attendance";
    commonScreenRenderer(url, "#attendanceContainer");
}
function editAttendanceFormScreen(id){
    var url =  "/template/attendance/"+id;
    commonScreenRenderer(url, "#attendanceContainer");
}
function viewAttendanceFormScreen(id){
    var url =  "/template/attendanceViewForm/"+id;
    commonScreenRenderer(url, "#attendanceContainer");
}



function loadAttendanceForm(){
    hideValidationMessages();
    initializeAttendanceForm();
    $('#attendance_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeAttendanceForm(){
    $("#attendance_id").val('');
    // jsInputFieldInitialization
}

function editAttendanceForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  "/template/getAttendance/" + id,
        cache : false,
        success : function(attendance) {
            $("#attendance_id").val(attendance.id);
            // jsInputFieldAssignment
            //$('#attendance_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveAttendance() {
    hideValidationMessages();
    
    
    var attendance = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),attendanceType : $("#attendanceType").val(),attendanceDate : $("#attendanceDate").val(),attendanceTime : $("#attendanceTime").val(),
    };
    var url =  "/template/attendance/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : attendance,
        success : function(data) {
        	$('#attendanceContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveAttendance(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/template/attendance/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#attendanceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteAttendance(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/template/attendance/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#attendanceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}