/**
 * Class : companyProfileActions.js (Actions js are here)
 * Company Profile Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////companyProfileActions.js

function loadCompanyProfileFormDialog(){
    var title = 'Company Profile';
    var containerId = '#commonPopup';
    var url =  baseHref+"companyProfile";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editCompanyProfileFormDialog(id){
    var title = 'Company Profile';
    var containerId = '#commonPopup';
    var url =  baseHref+"companyProfile/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadCompanyProfileFormScreen(){
    var url =  baseHref+"companyProfile";
    commonScreenRenderer(url, "#companyProfileContainer");
}
function editCompanyProfileFormScreen(id){
    var url =  baseHref+"companyProfile/"+id;
    commonScreenRenderer(url, "#companyProfileContainer");
}
function viewCompanyProfileFormScreen(id){
    var url =  baseHref+"companyProfileViewForm/"+id;
    commonScreenRenderer(url, "#companyProfileContainer");
}



function loadCompanyProfileForm(){
    hideValidationMessages();
    initializeCompanyProfileForm();
    $('#companyProfile_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeCompanyProfileForm(){
    $("#companyProfile_id").val('');
    // jsInputFieldInitialization
}

function editCompanyProfileForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getCompanyProfile/" + id,
        cache : false,
        success : function(companyProfile) {
            $("#companyProfile_id").val(companyProfile.id);
            // jsInputFieldAssignment
            //$('#companyProfile_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveCompanyProfile() {
    hideValidationMessages();
    
    
    var companyProfile = {
        id : $("#id").val(),
        userId : $("#userId").val(),name : $("#name").val(),address : $("#address").val(),establishedDate : $("#establishedDate").val(),email : $("#email").val(),authorName : $("#authorName").val(),
    };
    var url =  baseHref+"companyProfile/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : companyProfile,
        success : function(data) {
        	$('#companyProfileContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveCompanyProfile(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"companyProfile/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#companyProfileContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteCompanyProfile(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"companyProfile/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#companyProfileContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}