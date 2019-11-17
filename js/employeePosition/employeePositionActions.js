/**
 * Class : employeePositionActions.js (Actions js are here)
 * Employee Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////employeePositionActions.js

function loadEmployeePositionFormDialog(){
    var title = 'Employee Position';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeePosition";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEmployeePositionFormDialog(id){
    var title = 'Employee Position';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeePosition/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEmployeePositionFormScreen(){
    var url =  baseHref+"employeePosition";
    commonScreenRenderer(url, "#employeePositionContainer");
}
function editEmployeePositionFormScreen(id){
    var url =  baseHref+"employeePosition/"+id;
    commonScreenRenderer(url, "#employeePositionContainer");
}
function viewEmployeePositionFormScreen(id){
    var url =  baseHref+"employeePositionViewForm/"+id;
    commonScreenRenderer(url, "#employeePositionContainer");
}



function loadEmployeePositionForm(){
    hideValidationMessages();
    initializeEmployeePositionForm();
    $('#employeePosition_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEmployeePositionForm(){
    $("#employeePosition_id").val('');
    // jsInputFieldInitialization
}

function editEmployeePositionForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getEmployeePosition/" + id,
        cache : false,
        success : function(employeePosition) {
            $("#employeePosition_id").val(employeePosition.id);
            // jsInputFieldAssignment
            //$('#employeePosition_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveEmployeePosition() {
    hideValidationMessages();
    
    
    var employeePosition = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),jobPositionId : $("#jobPositionId").val(),description : $("#description").val(),
    };
    var url =  baseHref+"employeePosition/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : employeePosition,
        success : function(data) {
        	$('#employeePositionContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEmployeePosition(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeePosition/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#employeePositionContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEmployeePosition(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeePosition/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#employeePositionContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}