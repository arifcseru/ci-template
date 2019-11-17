/**
 * Class : expenseActions.js (Actions js are here)
 * Expense Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////expenseActions.js

function loadExpenseFormDialog(){
    var title = 'Expense';
    var containerId = '#commonPopup';
    var url =  baseHref+"expense";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editExpenseFormDialog(id){
    var title = 'Expense';
    var containerId = '#commonPopup';
    var url =  baseHref+"expense/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadExpenseFormScreen(){
    var url =  baseHref+"expense";
    commonScreenRenderer(url, "#expenseContainer");
}
function editExpenseFormScreen(id){
    var url =  baseHref+"expense/"+id;
    commonScreenRenderer(url, "#expenseContainer");
}
function viewExpenseFormScreen(id){
    var url =  baseHref+"expenseViewForm/"+id;
    commonScreenRenderer(url, "#expenseContainer");
}



function loadExpenseForm(){
    hideValidationMessages();
    initializeExpenseForm();
    $('#expense_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeExpenseForm(){
    $("#expense_id").val('');
    // jsInputFieldInitialization
}

function editExpenseForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getExpense/" + id,
        cache : false,
        success : function(expense) {
            $("#expense_id").val(expense.id);
            // jsInputFieldAssignment
            //$('#expense_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveExpense() {
    hideValidationMessages();
    
    
    var expense = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),expenseTypeId : $("#expenseTypeId").val(),amount : $("#amount").val(),transactionDate : $("#transactionDate").val(),
    };
    var url =  baseHref+"expense/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : expense,
        success : function(data) {
        	$('#expenseContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveExpense(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"expense/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#expenseContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteExpense(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"expense/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#expenseContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}