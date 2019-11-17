/**
 * Class : roleActions.js (Actions js are here)
 * Role Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////roleActions.js

function loadRoleFormDialog(){
    var title = 'Role';
    var containerId = '#commonPopup';
    var url =  baseHref+"role";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editRoleFormDialog(id){
    var title = 'Role';
    var containerId = '#commonPopup';
    var url =  baseHref+"role/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadRoleFormScreen(){
    var url =  baseHref+"role";
    commonScreenRenderer(url, "#roleContainer");
}
function editRoleFormScreen(id){
    var url =  baseHref+"role/"+id;
    commonScreenRenderer(url, "#roleContainer");
}
function viewRoleFormScreen(id){
    var url =  baseHref+"roleViewForm/"+id;
    commonScreenRenderer(url, "#roleContainer");
}



function loadRoleForm(){
    hideValidationMessages();
    initializeRoleForm();
    $('#role_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeRoleForm(){
    $("#role_id").val('');
    // jsInputFieldInitialization
}

function editRoleForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getRole/" + id,
        cache : false,
        success : function(role) {
            $("#role_id").val(role.id);
            // jsInputFieldAssignment
            //$('#role_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveRole() {
    hideValidationMessages();
    
    
    var role = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),
    };
    var url =  baseHref+"role/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : role,
        success : function(data) {
        	$('#roleContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveRole(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"role/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#roleContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteRole(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"role/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#roleContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}