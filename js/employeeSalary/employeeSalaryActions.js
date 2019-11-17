/**
 * Class : employeeSalaryActions.js (Actions js are here)
 * Employee Salary Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////employeeSalaryActions.js

function loadEmployeeSalaryFormDialog(){
    var title = 'Employee Salary';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeeSalary";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEmployeeSalaryFormDialog(id){
    var title = 'Employee Salary';
    var containerId = '#commonPopup';
    var url =  baseHref+"employeeSalary/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEmployeeSalaryFormScreen(){
    var url =  baseHref+"employeeSalary";
    commonScreenRenderer(url, "#employeeSalaryContainer");
}
function editEmployeeSalaryFormScreen(id){
    var url =  baseHref+"employeeSalary/"+id;
    commonScreenRenderer(url, "#employeeSalaryContainer");
}
function viewEmployeeSalaryFormScreen(id){
    var url =  baseHref+"employeeSalaryViewForm/"+id;
    commonScreenRenderer(url, "#employeeSalaryContainer");
}



function loadEmployeeSalaryForm(){
    hideValidationMessages();
    initializeEmployeeSalaryForm();
    $('#employeeSalary_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEmployeeSalaryForm(){
    $("#employeeSalary_id").val('');
    // jsInputFieldInitialization
}

function editEmployeeSalaryForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getEmployeeSalary/" + id,
        cache : false,
        success : function(employeeSalary) {
            $("#employeeSalary_id").val(employeeSalary.id);
            // jsInputFieldAssignment
            //$('#employeeSalary_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveEmployeeSalary() {
    hideValidationMessages();
    
    
    var employeeSalary = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),amount : $("#amount").val(),taxPercent : $("#taxPercent").val(),
    };
    var url =  baseHref+"employeeSalary/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : employeeSalary,
        success : function(data) {
        	$('#employeeSalaryContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEmployeeSalary(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeeSalary/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeSalaryContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEmployeeSalary(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employeeSalary/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeSalaryContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}