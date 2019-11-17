/**
 * Class : providendFundActions.js (Actions js are here)
 * Providend Fund Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////providendFundActions.js

function loadProvidendFundFormDialog(){
    var title = 'Providend Fund';
    var containerId = '#commonPopup';
    var url =  baseHref+"providendFund";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editProvidendFundFormDialog(id){
    var title = 'Providend Fund';
    var containerId = '#commonPopup';
    var url =  baseHref+"providendFund/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadProvidendFundFormScreen(){
    var url =  baseHref+"providendFund";
    commonScreenRenderer(url, "#providendFundContainer");
}
function editProvidendFundFormScreen(id){
    var url =  baseHref+"providendFund/"+id;
    commonScreenRenderer(url, "#providendFundContainer");
}
function viewProvidendFundFormScreen(id){
    var url =  baseHref+"providendFundViewForm/"+id;
    commonScreenRenderer(url, "#providendFundContainer");
}



function loadProvidendFundForm(){
    hideValidationMessages();
    initializeProvidendFundForm();
    $('#providendFund_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeProvidendFundForm(){
    $("#providendFund_id").val('');
    // jsInputFieldInitialization
}

function editProvidendFundForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getProvidendFund/" + id,
        cache : false,
        success : function(providendFund) {
            $("#providendFund_id").val(providendFund.id);
            // jsInputFieldAssignment
            //$('#providendFund_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addPfDetailsRow(){

 var rowCount = $('#pfDetailsTable tr').length-1;    $('#pfDetailsTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="pfDetailss.id_'+rowCount+'" name="pfDetailss['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="pfDetails_employeeId_'+rowCount+'">    <option selected>Choose employee</option>'+employeeSelectOptions+'</select></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Month No</label>		<input required="" type="text" 		class="form-control" id="pfDetails_monthNo_'+rowCount+'"		 name="pfDetails[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deletePfDetailsRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deletePfDetailsRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteProvidendFundPfDetails/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete PfDetails");
					}
	});
}
}

function saveProvidendFund() {
    hideValidationMessages();
    var rowCount = $('#pfDetailsTable tr').length-1;
    var pfDetailsList = [];
    for (var i = 0; i < rowCount; i++) {
		var pfDetails = {
employeeId : $('#pfDetails_employeeId_'+i).val(),
monthNo : $('#pfDetails_monthNo_'+i).val(),
empAmount : $('#pfDetails_empAmount_'+i).val(),
companyAmount : $('#pfDetails_companyAmount_'+i).val(),
		}
		pfDetailsList.push(pfDetails);
	}
    var pfDetailsObj = Object.assign({}, pfDetailsList);
    console.log(pfDetailsObj);
    
    var providendFund = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),monthlyAmount : $("#monthlyAmount").val(),installmentMonths : $("#installmentMonths").val(),pfDetails : pfDetailsObj,
    };
    var url =  baseHref+"providendFund/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : providendFund,
        success : function(data) {
        	$('#providendFundContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveProvidendFund(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"providendFund/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#providendFundContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteProvidendFund(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"providendFund/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#providendFundContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}