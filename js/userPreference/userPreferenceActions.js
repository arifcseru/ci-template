/**
 * Class : userPreferenceActions.js (Actions js are here)
 * User Preference Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////userPreferenceActions.js

function loadUserPreferenceFormDialog(){
    var title = 'User Preference';
    var containerId = '#commonPopup';
    var url =  baseHref+"userPreference";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editUserPreferenceFormDialog(id){
    var title = 'User Preference';
    var containerId = '#commonPopup';
    var url =  baseHref+"userPreference/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadUserPreferenceFormScreen(){
    var url =  baseHref+"userPreference";
    commonScreenRenderer(url, "#userPreferenceContainer");
}
function editUserPreferenceFormScreen(id){
    var url =  baseHref+"userPreference/"+id;
    commonScreenRenderer(url, "#userPreferenceContainer");
}
function viewUserPreferenceFormScreen(id){
    var url =  baseHref+"userPreferenceViewForm/"+id;
    commonScreenRenderer(url, "#userPreferenceContainer");
}



function loadUserPreferenceForm(){
    hideValidationMessages();
    initializeUserPreferenceForm();
    $('#userPreference_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeUserPreferenceForm(){
    $("#userPreference_id").val('');
    // jsInputFieldInitialization
}

function editUserPreferenceForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getUserPreference/" + id,
        cache : false,
        success : function(userPreference) {
            $("#userPreference_id").val(userPreference.id);
            // jsInputFieldAssignment
            //$('#userPreference_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveUserPreference() {
    hideValidationMessages();
    
    
    var userPreference = {
        id : $("#id").val(),
        applicationTitle : $("#applicationTitle").val(),metaTags : $("#metaTags").val(),userId : $("#userId").val(),activeCompanyId : $("#activeCompanyId").val(),language : $("#language").val(),activeRole : $("#activeRole").val(),showNotification : $("#showNotification").val(),showEmail : $("#showEmail").val(),showTask : $("#showTask").val(),
    };
    var url =  baseHref+"userPreference/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : userPreference,
        success : function(data) {
            //$('#userPreferenceContainer').html(data);
            loadUserPreferenceFormUIToEdit(1);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveUserPreference(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"userPreference/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#userPreferenceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteUserPreference(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"userPreference/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#userPreferenceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}