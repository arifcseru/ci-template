/**
 * Class : expepnseTypeActions.js (Actions js are here)
 * Expepnse Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////expepnseTypeActions.js

function loadExpepnseTypeFormDialog(){
    var title = 'Expepnse Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"expepnseType";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editExpepnseTypeFormDialog(id){
    var title = 'Expepnse Type';
    var containerId = '#commonPopup';
    var url =  baseHref+"expepnseType/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadExpepnseTypeFormScreen(){
    var url =  baseHref+"expepnseType";
    commonScreenRenderer(url, "#expepnseTypeContainer");
}
function editExpepnseTypeFormScreen(id){
    var url =  baseHref+"expepnseType/"+id;
    commonScreenRenderer(url, "#expepnseTypeContainer");
}
function viewExpepnseTypeFormScreen(id){
    var url =  baseHref+"expepnseTypeViewForm/"+id;
    commonScreenRenderer(url, "#expepnseTypeContainer");
}



function loadExpepnseTypeForm(){
    hideValidationMessages();
    initializeExpepnseTypeForm();
    $('#expepnseType_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeExpepnseTypeForm(){
    $("#expepnseType_id").val('');
    // jsInputFieldInitialization
}

function editExpepnseTypeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getExpepnseType/" + id,
        cache : false,
        success : function(expepnseType) {
            $("#expepnseType_id").val(expepnseType.id);
            // jsInputFieldAssignment
            //$('#expepnseType_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveExpepnseType() {
    hideValidationMessages();
    
    
    var expepnseType = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),
    };
    var url =  baseHref+"expepnseType/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : expepnseType,
        success : function(data) {
        	$('#expepnseTypeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveExpepnseType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"expepnseType/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#expepnseTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteExpepnseType(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"expepnseType/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#expepnseTypeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}