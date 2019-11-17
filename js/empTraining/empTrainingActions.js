/**
 * Class : empTrainingActions.js (Actions js are here)
 * Emp Training Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////empTrainingActions.js

function loadEmpTrainingFormDialog(){
    var title = 'Emp Training';
    var containerId = '#commonPopup';
    var url =  baseHref+"empTraining";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEmpTrainingFormDialog(id){
    var title = 'Emp Training';
    var containerId = '#commonPopup';
    var url =  baseHref+"empTraining/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEmpTrainingFormScreen(){
    var url =  baseHref+"empTraining";
    commonScreenRenderer(url, "#empTrainingContainer");
}
function editEmpTrainingFormScreen(id){
    var url =  baseHref+"empTraining/"+id;
    commonScreenRenderer(url, "#empTrainingContainer");
}
function viewEmpTrainingFormScreen(id){
    var url =  baseHref+"empTrainingViewForm/"+id;
    commonScreenRenderer(url, "#empTrainingContainer");
}



function loadEmpTrainingForm(){
    hideValidationMessages();
    initializeEmpTrainingForm();
    $('#empTraining_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEmpTrainingForm(){
    $("#empTraining_id").val('');
    // jsInputFieldInitialization
}

function editEmpTrainingForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getEmpTraining/" + id,
        cache : false,
        success : function(empTraining) {
            $("#empTraining_id").val(empTraining.id);
            // jsInputFieldAssignment
            //$('#empTraining_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addTrainingDetailsRow(){

 var rowCount = $('#trainingDetailsTable tr').length-1;    $('#trainingDetailsTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="trainingDetailss.id_'+rowCount+'" name="trainingDetailss['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="trainingDetails_subjectId_'+rowCount+'">    <option selected>Choose subject</option>'+subjectSelectOptions+'</select></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Hour No</label>		<input required="" type="text" 		class="form-control" id="trainingDetails_hourNo_'+rowCount+'"		 name="trainingDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Class Date</label>		<input required="" type="date" 		class="form-control" id="trainingDetails_classDate_'+rowCount+'"		 name="trainingDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Is Attend</label>		<input required="" type="checkbox" 		class="form-control" id="trainingDetails_isAttend_'+rowCount+'"		 name="trainingDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Remarks</label><textarea required="" class="form-control" id="trainingDetails_remarks_'+rowCount+'" name="trainingDetails[]"></textarea></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingDetailsRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteTrainingDetailsRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteEmpTrainingTrainingDetails/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete TrainingDetails");
					}
	});
}
}

function saveEmpTraining() {
    hideValidationMessages();
    var rowCount = $('#trainingDetailsTable tr').length-1;
    var trainingDetailsList = [];
    for (var i = 0; i < rowCount; i++) {
		var trainingDetails = {
subjectId : $('#trainingDetails_subjectId_'+i).val(),
hourNo : $('#trainingDetails_hourNo_'+i).val(),
classDate : $('#trainingDetails_classDate_'+i).val(),
isAttend : $('#trainingDetails_isAttend_'+i).val(),
remarks : $('#trainingDetails_remarks_'+i).val(),
		}
		trainingDetailsList.push(trainingDetails);
	}
    var trainingDetailsObj = Object.assign({}, trainingDetailsList);
    console.log(trainingDetailsObj);
    
    var empTraining = {
        id : $("#id").val(),
        courseId : $("#courseId").val(),employeeId : $("#employeeId").val(),title : $("#title").val(),trainingDetails : trainingDetailsObj,approverId : $("#approverId").val(),
    };
    var url =  baseHref+"empTraining/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : empTraining,
        success : function(data) {
        	$('#empTrainingContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEmpTraining(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"empTraining/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#empTrainingContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEmpTraining(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"empTraining/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#empTrainingContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}