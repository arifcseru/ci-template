/**
 * Class : jobPostingActions.js (Actions js are here)
 * Job Posting Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////jobPostingActions.js

function loadJobPostingFormDialog(){
    var title = 'Job Posting';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobPosting";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editJobPostingFormDialog(id){
    var title = 'Job Posting';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobPosting/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadJobPostingFormScreen(){
    var url =  baseHref+"jobPosting";
    commonScreenRenderer(url, "#jobPostingContainer");
}
function editJobPostingFormScreen(id){
    var url =  baseHref+"jobPosting/"+id;
    commonScreenRenderer(url, "#jobPostingContainer");
}
function viewJobPostingFormScreen(id){
    var url =  baseHref+"jobPostingViewForm/"+id;
    commonScreenRenderer(url, "#jobPostingContainer");
}



function loadJobPostingForm(){
    hideValidationMessages();
    initializeJobPostingForm();
    $('#jobPosting_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeJobPostingForm(){
    $("#jobPosting_id").val('');
    // jsInputFieldInitialization
}

function editJobPostingForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getJobPosting/" + id,
        cache : false,
        success : function(jobPosting) {
            $("#jobPosting_id").val(jobPosting.id);
            // jsInputFieldAssignment
            //$('#jobPosting_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveJobPosting() {
    hideValidationMessages();
    
    
    var jobPosting = {
        id : $("#id").val(),
        positionName : $("#positionName").val(),shortCode : $("#shortCode").val(),description : $("#description").val(),jobPositionId : $("#jobPositionId").val(),postingDate : $("#postingDate").val(),expireDate : $("#expireDate").val(),
    };
    var url =  baseHref+"jobPosting/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : jobPosting,
        success : function(data) {
        	$('#jobPostingContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveJobPosting(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobPosting/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#jobPostingContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteJobPosting(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobPosting/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#jobPostingContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}