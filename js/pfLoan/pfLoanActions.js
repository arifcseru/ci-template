/**
 * Class : pfLoanActions.js (Actions js are here)
 * Pf Loan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////pfLoanActions.js

function loadPfLoanFormDialog(){
    var title = 'Pf Loan';
    var containerId = '#commonPopup';
    var url =  baseHref+"pfLoan";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editPfLoanFormDialog(id){
    var title = 'Pf Loan';
    var containerId = '#commonPopup';
    var url =  baseHref+"pfLoan/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadPfLoanFormScreen(){
    var url =  baseHref+"pfLoan";
    commonScreenRenderer(url, "#pfLoanContainer");
}
function editPfLoanFormScreen(id){
    var url =  baseHref+"pfLoan/"+id;
    commonScreenRenderer(url, "#pfLoanContainer");
}
function viewPfLoanFormScreen(id){
    var url =  baseHref+"pfLoanViewForm/"+id;
    commonScreenRenderer(url, "#pfLoanContainer");
}



function loadPfLoanForm(){
    hideValidationMessages();
    initializePfLoanForm();
    $('#pfLoan_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializePfLoanForm(){
    $("#pfLoan_id").val('');
    // jsInputFieldInitialization
}

function editPfLoanForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getPfLoan/" + id,
        cache : false,
        success : function(pfLoan) {
            $("#pfLoan_id").val(pfLoan.id);
            // jsInputFieldAssignment
            //$('#pfLoan_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addPfLoanInstallmentRow(){

 var rowCount = $('#pfLoanInstallmentTable tr').length-1;    $('#pfLoanInstallmentTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="pfLoanInstallments.id_'+rowCount+'" name="pfLoanInstallments['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Month No</label>		<input required="" type="text" 		class="form-control" id="pfLoanInstallment_monthNo_'+rowCount+'"		 name="pfLoanInstallment[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Transaction Date</label>		<input required="" type="date" 		class="form-control" id="pfLoanInstallment_transactionDate_'+rowCount+'"		 name="pfLoanInstallment[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deletePfLoanInstallmentRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deletePfLoanInstallmentRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deletePfLoanPfLoanInstallment/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete PfLoanInstallment");
					}
	});
}
}

function savePfLoan() {
    hideValidationMessages();
    var rowCount = $('#pfLoanInstallmentTable tr').length-1;
    var pfLoanInstallmentList = [];
    for (var i = 0; i < rowCount; i++) {
		var pfLoanInstallment = {
installment : $('#pfLoanInstallment_installment_'+i).val(),
monthNo : $('#pfLoanInstallment_monthNo_'+i).val(),
transactionDate : $('#pfLoanInstallment_transactionDate_'+i).val(),
		}
		pfLoanInstallmentList.push(pfLoanInstallment);
	}
    var pfLoanInstallmentObj = Object.assign({}, pfLoanInstallmentList);
    console.log(pfLoanInstallmentObj);
    
    var pfLoan = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),installment : $("#installment").val(),transactionDate : $("#transactionDate").val(),installmentFrom : $("#installmentFrom").val(),pfLoanInstallment : pfLoanInstallmentObj,installmentTo : $("#installmentTo").val(),
    };
    var url =  baseHref+"pfLoan/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : pfLoan,
        success : function(data) {
        	$('#pfLoanContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approvePfLoan(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"pfLoan/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#pfLoanContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deletePfLoan(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"pfLoan/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#pfLoanContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}