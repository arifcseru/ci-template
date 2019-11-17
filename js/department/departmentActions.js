/**
 * Class : departmentActions.js (Actions js are here)
 * Department Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////departmentActions.js

function loadDepartmentFormDialog(){
    var title = 'Department';
    var containerId = '#commonPopup';
    var url =  baseHref+"department";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editDepartmentFormDialog(id){
    var title = 'Department';
    var containerId = '#commonPopup';
    var url =  baseHref+"department/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadDepartmentFormScreen(){
    var url =  baseHref+"department";
    commonScreenRenderer(url, "#departmentContainer");
}
function editDepartmentFormScreen(id){
    var url =  baseHref+"department/"+id;
    commonScreenRenderer(url, "#departmentContainer");
}
function viewDepartmentFormScreen(id){
    var url =  baseHref+"departmentViewForm/"+id;
    commonScreenRenderer(url, "#departmentContainer");
}



function loadDepartmentForm(){
    hideValidationMessages();
    initializeDepartmentForm();
    $('#department_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeDepartmentForm(){
    $("#department_id").val('');
    // jsInputFieldInitialization
}

function editDepartmentForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getDepartment/" + id,
        cache : false,
        success : function(department) {
            $("#department_id").val(department.id);
            // jsInputFieldAssignment
            //$('#department_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveDepartment() {
    hideValidationMessages();
    
    
    var department = {
        id : $("#id").val(),
        branchId : $("#branchId").val(),name : $("#name").val(),shortCode : $("#shortCode").val(),description : $("#description").val(),
    };
    var url =  baseHref+"department/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : department,
        success : function(data) {
        	$('#departmentContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveDepartment(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"department/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#departmentContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteDepartment(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"department/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#departmentContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}