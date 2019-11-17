/**
 * Class : companyBalanceActions.js (Actions js are here)
 * Company Balance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////companyBalanceActions.js

function loadCompanyBalanceFormDialog(){
    var title = 'Company Balance';
    var containerId = '#commonPopup';
    var url =  baseHref+"companyBalance";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editCompanyBalanceFormDialog(id){
    var title = 'Company Balance';
    var containerId = '#commonPopup';
    var url =  baseHref+"companyBalance/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadCompanyBalanceFormScreen(){
    var url =  baseHref+"companyBalance";
    commonScreenRenderer(url, "#companyBalanceContainer");
}
function editCompanyBalanceFormScreen(id){
    var url =  baseHref+"companyBalance/"+id;
    commonScreenRenderer(url, "#companyBalanceContainer");
}
function viewCompanyBalanceFormScreen(id){
    var url =  baseHref+"companyBalanceViewForm/"+id;
    commonScreenRenderer(url, "#companyBalanceContainer");
}



function loadCompanyBalanceForm(){
    hideValidationMessages();
    initializeCompanyBalanceForm();
    $('#companyBalance_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeCompanyBalanceForm(){
    $("#companyBalance_id").val('');
    // jsInputFieldInitialization
}

function editCompanyBalanceForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getCompanyBalance/" + id,
        cache : false,
        success : function(companyBalance) {
            $("#companyBalance_id").val(companyBalance.id);
            // jsInputFieldAssignment
            //$('#companyBalance_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveCompanyBalance() {
    hideValidationMessages();
    
    
    var companyBalance = {
        id : $("#id").val(),
        companyProfileId : $("#companyProfileId").val(),initialBalance : $("#initialBalance").val(),currentBalance : $("#currentBalance").val(),
    };
    var url =  baseHref+"companyBalance/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : companyBalance,
        success : function(data) {
        	$('#companyBalanceContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveCompanyBalance(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"companyBalance/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#companyBalanceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteCompanyBalance(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"companyBalance/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#companyBalanceContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}