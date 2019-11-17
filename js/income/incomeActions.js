/**
 * Class : incomeActions.js (Actions js are here)
 * Income Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////incomeActions.js

function loadIncomeFormDialog(){
    var title = 'Income';
    var containerId = '#commonPopup';
    var url =  baseHref+"income";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editIncomeFormDialog(id){
    var title = 'Income';
    var containerId = '#commonPopup';
    var url =  baseHref+"income/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadIncomeFormScreen(){
    var url =  baseHref+"income";
    commonScreenRenderer(url, "#incomeContainer");
}
function editIncomeFormScreen(id){
    var url =  baseHref+"income/"+id;
    commonScreenRenderer(url, "#incomeContainer");
}
function viewIncomeFormScreen(id){
    var url =  baseHref+"incomeViewForm/"+id;
    commonScreenRenderer(url, "#incomeContainer");
}



function loadIncomeForm(){
    hideValidationMessages();
    initializeIncomeForm();
    $('#income_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeIncomeForm(){
    $("#income_id").val('');
    // jsInputFieldInitialization
}

function editIncomeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getIncome/" + id,
        cache : false,
        success : function(income) {
            $("#income_id").val(income.id);
            // jsInputFieldAssignment
            //$('#income_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveIncome() {
    hideValidationMessages();
    
    
    var income = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),incomeTypeId : $("#incomeTypeId").val(),amount : $("#amount").val(),transactionDate : $("#transactionDate").val(),
    };
    var url =  baseHref+"income/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : income,
        success : function(data) {
        	$('#incomeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveIncome(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"income/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#incomeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteIncome(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"income/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#incomeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}