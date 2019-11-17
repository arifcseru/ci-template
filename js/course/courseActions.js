/**
 * Class : courseActions.js (Actions js are here)
 * Course Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////courseActions.js

function loadCourseFormDialog(){
    var title = 'Course';
    var containerId = '#commonPopup';
    var url =  baseHref+"course";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editCourseFormDialog(id){
    var title = 'Course';
    var containerId = '#commonPopup';
    var url =  baseHref+"course/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadCourseFormScreen(){
    var url =  baseHref+"course";
    commonScreenRenderer(url, "#courseContainer");
}
function editCourseFormScreen(id){
    var url =  baseHref+"course/"+id;
    commonScreenRenderer(url, "#courseContainer");
}
function viewCourseFormScreen(id){
    var url =  baseHref+"courseViewForm/"+id;
    commonScreenRenderer(url, "#courseContainer");
}



function loadCourseForm(){
    hideValidationMessages();
    initializeCourseForm();
    $('#course_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeCourseForm(){
    $("#course_id").val('');
    // jsInputFieldInitialization
}

function editCourseForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getCourse/" + id,
        cache : false,
        success : function(course) {
            $("#course_id").val(course.id);
            // jsInputFieldAssignment
            //$('#course_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addSubjectRow(){

 var rowCount = $('#subjectTable tr').length-1;    $('#subjectTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="subjects.id_'+rowCount+'" name="subjects['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Title</label>		<input required="" type="text" 		class="form-control" id="subject_title_'+rowCount+'"		 name="subject[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Description</label><textarea required="" class="form-control" id="subject_description_'+rowCount+'" name="subject[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Class Date</label>		<input required="" type="date" 		class="form-control" id="subject_classDate_'+rowCount+'"		 name="subject[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Start Hour</label>		<input required="" type="text" 		class="form-control" id="subject_startHour_'+rowCount+'"		 name="subject[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Duration</label>		<input required="" type="number" 		class="form-control" id="subject_duration_'+rowCount+'"		 name="subject[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="subject_teacherId_'+rowCount+'">    <option selected>Choose employee</option>'+employeeSelectOptions+'</select></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteSubjectRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteSubjectRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteCourseSubject/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete Subject");
					}
	});
}
}

function saveCourse() {
    hideValidationMessages();
    var rowCount = $('#subjectTable tr').length-1;
    var subjectList = [];
    for (var i = 0; i < rowCount; i++) {
		var subject = {
title : $('#subject_title_'+i).val(),
description : $('#subject_description_'+i).val(),
classDate : $('#subject_classDate_'+i).val(),
startHour : $('#subject_startHour_'+i).val(),
duration : $('#subject_duration_'+i).val(),
teacherId : $('#subject_teacherId_'+i).val(),
		}
		subjectList.push(subject);
	}
    var subjectObj = Object.assign({}, subjectList);
    console.log(subjectObj);
    
    var course = {
        id : $("#id").val(),
        subject : subjectObj,shortCode : $("#shortCode").val(),description : $("#description").val(),applicantInfoId : $("#applicantInfoId").val(),supervisorId : $("#supervisorId").val(),
    };
    var url =  baseHref+"course/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : course,
        success : function(data) {
        	$('#courseContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveCourse(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"course/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#courseContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteCourse(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"course/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#courseContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}