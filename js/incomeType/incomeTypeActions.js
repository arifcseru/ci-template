/**
 * Class : incomeTypeActions.js (Actions js are here)
 * Income Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////incomeTypeActions.js

function loadIncomeTypeFormDialog(){
    var title = 'Income Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"incomeType";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editIncomeTypeFormDialog(id){
    var title = 'Income Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"incomeType/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadIncomeTypeFormScreen(){
    var url =  baseHref+"incomeType";
    commonScreenRenderer(url, "#incomeTypeContainer");
}
function editIncomeTypeFormScreen(id){
    var url =  baseHref+"incomeType/"+id;
    commonScreenRenderer(url, "#incomeTypeContainer");
}
function viewIncomeTypeFormScreen(id){
    var url =  baseHref+"incomeTypeViewForm/"+id;
    commonScreenRenderer(url, "#incomeTypeContainer");
}



function loadIncomeTypeForm(){
    hideValidationMessages();
    initializeIncomeTypeForm();
    $('#incomeType_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeIncomeTypeForm(){
    $("#incomeType_id").val('');
    // jsInputFieldInitialization
}

function editIncomeTypeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getIncomeType/" + id,
        cache : false,
        success : function(incomeType) {
            $("#incomeType_id").val(incomeType.id);
            // jsInputFieldAssignment
            //$('#incomeType_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveIncomeType() {
    hideValidationMessages();
    
    
    var incomeType = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),
    };
    var url =  baseHref+"incomeType/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : incomeType,
        success : function(data) {
        	$('#incomeTypeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveIncomeType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"incomeType/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#incomeTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteIncomeType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"incomeType/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#incomeTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}