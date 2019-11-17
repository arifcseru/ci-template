/**
 * Class : jobPositionActions.js (Actions js are here)
 * Job Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////jobPositionActions.js

function loadJobPositionFormDialog(){
    var title = 'Job Position';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobPosition";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editJobPositionFormDialog(id){
    var title = 'Job Position';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobPosition/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadJobPositionFormScreen(){
    var url =  baseHref+"jobPosition";
    commonScreenRenderer(url, "#jobPositionContainer");
}
function editJobPositionFormScreen(id){
    var url =  baseHref+"jobPosition/"+id;
    commonScreenRenderer(url, "#jobPositionContainer");
}
function viewJobPositionFormScreen(id){
    var url =  baseHref+"jobPositionViewForm/"+id;
    commonScreenRenderer(url, "#jobPositionContainer");
}



function loadJobPositionForm(){
    hideValidationMessages();
    initializeJobPositionForm();
    $('#jobPosition_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeJobPositionForm(){
    $("#jobPosition_id").val('');
    // jsInputFieldInitialization
}

function editJobPositionForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getJobPosition/" + id,
        cache : false,
        success : function(jobPosition) {
            $("#jobPosition_id").val(jobPosition.id);
            // jsInputFieldAssignment
            //$('#jobPosition_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveJobPosition() {
    hideValidationMessages();
    
    
    var jobPosition = {
        id : $("#id").val(),
        departmentId : $("#departmentId").val(),positionName : $("#positionName").val(),shortCode : $("#shortCode").val(),description : $("#description").val(),isActive : $("#isActive").val(),
    };
    var url =  baseHref+"jobPosition/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : jobPosition,
        success : function(data) {
        	$('#jobPositionContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveJobPosition(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobPosition/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#jobPositionContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteJobPosition(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobPosition/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#jobPositionContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}