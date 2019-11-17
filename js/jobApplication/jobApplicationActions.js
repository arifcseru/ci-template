/**
 * Class : jobApplicationActions.js (Actions js are here)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////jobApplicationActions.js

function loadJobApplicationFormDialog(){
    var title = 'Job Application';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobApplication";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editJobApplicationFormDialog(id){
    var title = 'Job Application';
    var containerId = '#commonPopup';
    var url =  baseHref+"jobApplication/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadJobApplicationFormScreen(){
    var url =  baseHref+"jobApplication";
    commonScreenRenderer(url, "#jobApplicationContainer");
}
function editJobApplicationFormScreen(id){
    var url =  baseHref+"jobApplication/"+id;
    commonScreenRenderer(url, "#jobApplicationContainer");
}
function viewJobApplicationFormScreen(id){
    var url =  baseHref+"jobApplicationViewForm/"+id;
    commonScreenRenderer(url, "#jobApplicationContainer");
}



function loadJobApplicationForm(){
    hideValidationMessages();
    initializeJobApplicationForm();
    $('#jobApplication_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeJobApplicationForm(){
    $("#jobApplication_id").val('');
    // jsInputFieldInitialization
}

function editJobApplicationForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getJobApplication/" + id,
        cache : false,
        success : function(jobApplication) {
            $("#jobApplication_id").val(jobApplication.id);
            // jsInputFieldAssignment
            //$('#jobApplication_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveJobApplication() {
    hideValidationMessages();
    
    
    var jobApplication = {
        id : $("#id").val(),
        jobPositionId : $("#jobPositionId").val(),firstName : $("#firstName").val(),lastName : $("#lastName").val(),applicantPhoneNo : $("#applicantPhoneNo").val(),email : $("#email").val(),expectedSalary : $("#expectedSalary").val(),message : $("#message").val(),skills : $("#skills").val(),resumeFileAddress : $("#resumeFileAddress").val(),
    };
    var url =  baseHref+"jobApplication/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : jobApplication,
        success : function(data) {
        	$('#jobApplicationContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveJobApplication(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobApplication/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#jobApplicationContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteJobApplication(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"jobApplication/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#jobApplicationContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}