/**
 * Class : interviewInfoActions.js (Actions js are here)
 * Interview Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////interviewInfoActions.js

function loadInterviewInfoFormDialog(){
    var title = 'Interview Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"interviewInfo";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editInterviewInfoFormDialog(id){
    var title = 'Interview Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"interviewInfo/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadInterviewInfoFormScreen(){
    var url =  baseHref+"interviewInfo";
    commonScreenRenderer(url, "#interviewInfoContainer");
}
function editInterviewInfoFormScreen(id){
    var url =  baseHref+"interviewInfo/"+id;
    commonScreenRenderer(url, "#interviewInfoContainer");
}
function viewInterviewInfoFormScreen(id){
    var url =  baseHref+"interviewInfoViewForm/"+id;
    commonScreenRenderer(url, "#interviewInfoContainer");
}



function loadInterviewInfoForm(){
    hideValidationMessages();
    initializeInterviewInfoForm();
    $('#interviewInfo_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeInterviewInfoForm(){
    $("#interviewInfo_id").val('');
    // jsInputFieldInitialization
}

function editInterviewInfoForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getInterviewInfo/" + id,
        cache : false,
        success : function(interviewInfo) {
            $("#interviewInfo_id").val(interviewInfo.id);
            // jsInputFieldAssignment
            //$('#interviewInfo_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveInterviewInfo() {
    hideValidationMessages();
    
    
    var interviewInfo = {
        id : $("#id").val(),
        applicantInfoId : $("#applicantInfoId").val(),interviewType : $("#interviewType").val(),shortCode : $("#shortCode").val(),totalMarks : $("#totalMarks").val(),obtainedMarks : $("#obtainedMarks").val(),description : $("#description").val(),interviewerId : $("#interviewerId").val(),
    };
    var url =  baseHref+"interviewInfo/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : interviewInfo,
        success : function(data) {
        	$('#interviewInfoContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveInterviewInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"interviewInfo/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#interviewInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteInterviewInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"interviewInfo/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#interviewInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}