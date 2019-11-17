/**
 * Class : employeeActions.js (Actions js are here)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////employeeActions.js

function loadEmployeeFormDialog(){
    var title = 'Employee';
    var containerId = '#commonPopup';
    var url =  baseHref+"employee";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEmployeeFormDialog(id){
    var title = 'Employee';
    var containerId = '#commonPopup';
    var url =  baseHref+"employee/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEmployeeFormScreen(){
    var url =  baseHref+"employee";
    commonScreenRenderer(url, "#employeeContainer");
}
function editEmployeeFormScreen(id){
    var url =  baseHref+"employee/"+id;
    commonScreenRenderer(url, "#employeeContainer");
}
function viewEmployeeFormScreen(id){
    var url =  baseHref+"employeeViewForm/"+id;
    commonScreenRenderer(url, "#employeeContainer");
}



function loadEmployeeForm(){
    hideValidationMessages();
    initializeEmployeeForm();
    $('#employee_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEmployeeForm(){
    $("#employee_id").val('');
    // jsInputFieldInitialization
}

function editEmployeeForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getEmployee/" + id,
        cache : false,
        success : function(employee) {
            $("#employee_id").val(employee.id);
            // jsInputFieldAssignment
            //$('#employee_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addTrainingInfoRow(){

 var rowCount = $('#trainingInfoTable tr').length-1;    $('#trainingInfoTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="trainingInfos.id_'+rowCount+'" name="trainingInfos['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="trainingInfo_courseId_'+rowCount+'">    <option selected>Choose course</option>'+courseSelectOptions+'</select></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Short Code</label>		<input required="" type="text" 		class="form-control" id="trainingInfo_shortCode_'+rowCount+'"		 name="trainingInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Description</label><textarea required="" class="form-control" id="trainingInfo_description_'+rowCount+'" name="trainingInfo[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="trainingInfo_supervisorId_'+rowCount+'">    <option selected>Choose employee</option>'+employeeSelectOptions+'</select></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingInfoRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteTrainingInfoRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteEmployeeTrainingInfo/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete TrainingInfo");
					}
	});
}
}function addEmpDocInfoRow(){

 var rowCount = $('#empDocInfoTable tr').length-1;    $('#empDocInfoTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="empDocInfos.id_'+rowCount+'" name="empDocInfos['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Document Name</label>		<input required="" type="text" 		class="form-control" id="empDocInfo_documentName_'+rowCount+'"		 name="empDocInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Document Details</label><textarea required="" class="form-control" id="empDocInfo_documentDetails_'+rowCount+'" name="empDocInfo[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Tags</label>		<input required="" type="text" 		class="form-control" id="empDocInfo_tags_'+rowCount+'"		 name="empDocInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Document</label>		<input required="" type="text" 		class="form-control" id="empDocInfo_document_'+rowCount+'"		 name="empDocInfo[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteEmpDocInfoRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteEmpDocInfoRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteEmployeeEmpDocInfo/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete EmpDocInfo");
					}
	});
}
}

function saveEmployee() {
    hideValidationMessages();
    var rowCount = $('#trainingInfoTable tr').length-1;
    var trainingInfoList = [];
    for (var i = 0; i < rowCount; i++) {
		var trainingInfo = {
courseId : $('#trainingInfo_courseId_'+i).val(),
shortCode : $('#trainingInfo_shortCode_'+i).val(),
description : $('#trainingInfo_description_'+i).val(),
supervisorId : $('#trainingInfo_supervisorId_'+i).val(),
		}
		trainingInfoList.push(trainingInfo);
	}
    var trainingInfoObj = Object.assign({}, trainingInfoList);
    console.log(trainingInfoObj);var rowCount = $('#empDocInfoTable tr').length-1;
    var empDocInfoList = [];
    for (var i = 0; i < rowCount; i++) {
		var empDocInfo = {
documentName : $('#empDocInfo_documentName_'+i).val(),
documentDetails : $('#empDocInfo_documentDetails_'+i).val(),
tags : $('#empDocInfo_tags_'+i).val(),
document : $('#empDocInfo_document_'+i).val(),
		}
		empDocInfoList.push(empDocInfo);
	}
    var empDocInfoObj = Object.assign({}, empDocInfoList);
    console.log(empDocInfoObj);
    
    var employee = {
        id : $("#id").val(),
        companyProfileId : $("#companyProfileId").val(),trainingInfo : trainingInfoObj,empDocInfo : empDocInfoObj,applicantId : $("#applicantId").val(),firstName : $("#firstName").val(),lastName : $("#lastName").val(),fatherName : $("#fatherName").val(),motherName : $("#motherName").val(),spouseName : $("#spouseName").val(),nationality : $("#nationality").val(),gender : $("#gender").val(),age : $("#age").val(),profilePic : $("#profilePic").val(),signature : $("#signature").val(),nidImage : $("#nidImage").val(),eduQualification : $("#eduQualification").val(),bloodGroup : $("#bloodGroup").val(),religion : $("#religion").val(),address : $("#address").val(),streetAddress : $("#streetAddress").val(),district : $("#district").val(),policeStation : $("#policeStation").val(),postCode : $("#postCode").val(),chairmanName : $("#chairmanName").val(),contactNo : $("#contactNo").val(),email : $("#email").val(),managerId : $("#managerId").val(),
    };
    var url =  baseHref+"employee/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : employee,
        success : function(data) {
        	$('#employeeContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEmployee(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employee/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEmployee(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"employee/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#employeeContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}