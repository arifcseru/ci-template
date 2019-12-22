/**
 * Class : employeeSeparationActions.js (Actions js are here)
 * Employee Separation Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////employeeSeparationActions.js

function loadEmployeeSeparationFormDialog(){
    var title = 'Employee Separation';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeeSeparation";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEmployeeSeparationFormDialog(id){
    var title = 'Employee Separation';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeeSeparation/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEmployeeSeparationFormScreen(){
    var url =  baseHref+"employeeSeparation";
    commonScreenRenderer(url, "#employeeSeparationContainer");
}
function editEmployeeSeparationFormScreen(id){
    var url =  baseHref+"employeeSeparation/"+id;
    commonScreenRenderer(url, "#employeeSeparationContainer");
}
function viewEmployeeSeparationFormScreen(id){
    var url =  baseHref+"employeeSeparationViewForm/"+id;
    commonScreenRenderer(url, "#employeeSeparationContainer");
}



function loadEmployeeSeparationForm(){
    hideValidationMessages();
    initializeEmployeeSeparationForm();
    $('#employeeSeparation_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEmployeeSeparationForm(){
    $("#employeeSeparation_id").val('');
    // jsInputFieldInitialization
}

function editEmployeeSeparationForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getEmployeeSeparation/" + id,
        cache : false,
        success : function(employeeSeparation) {
            $("#employeeSeparation_id").val(employeeSeparation.id);
            // jsInputFieldAssignment
            //$('#employeeSeparation_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveEmployeeSeparation() {
    hideValidationMessages();
    
    
    var employeeSeparation = {
        id : $("#id").val(),
        name : $("#name").val(),separationMessage : $("#separationMessage").val(),separationDate : $("#separationDate").val(),
    };
    var url =  baseHref+"employeeSeparation/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : employeeSeparation,
        success : function(data) {
        	$('#employeeSeparationContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEmployeeSeparation(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeeSeparation/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeSeparationContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEmployeeSeparation(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeeSeparation/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeSeparationContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}