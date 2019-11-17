/**
 * Class : trainingInfoActions.js (Actions js are here)
 * Training Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////trainingInfoActions.js

function loadTrainingInfoFormDialog(){
    var title = 'Training Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"trainingInfo";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editTrainingInfoFormDialog(id){
    var title = 'Training Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"trainingInfo/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadTrainingInfoFormScreen(){
    var url =  baseHref+"trainingInfo";
    commonScreenRenderer(url, "#trainingInfoContainer");
}
function editTrainingInfoFormScreen(id){
    var url =  baseHref+"trainingInfo/"+id;
    commonScreenRenderer(url, "#trainingInfoContainer");
}
function viewTrainingInfoFormScreen(id){
    var url =  baseHref+"trainingInfoViewForm/"+id;
    commonScreenRenderer(url, "#trainingInfoContainer");
}



function loadTrainingInfoForm(){
    hideValidationMessages();
    initializeTrainingInfoForm();
    $('#trainingInfo_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeTrainingInfoForm(){
    $("#trainingInfo_id").val('');
    // jsInputFieldInitialization
}

function editTrainingInfoForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getTrainingInfo/" + id,
        cache : false,
        success : function(trainingInfo) {
            $("#trainingInfo_id").val(trainingInfo.id);
            // jsInputFieldAssignment
            //$('#trainingInfo_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveTrainingInfo() {
    hideValidationMessages();
    
    
    var trainingInfo = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),courseId : $("#courseId").val(),shortCode : $("#shortCode").val(),description : $("#description").val(),supervisorId : $("#supervisorId").val(),
    };
    var url =  baseHref+"trainingInfo/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : trainingInfo,
        success : function(data) {
        	$('#trainingInfoContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveTrainingInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"trainingInfo/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#trainingInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteTrainingInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"trainingInfo/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#trainingInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}