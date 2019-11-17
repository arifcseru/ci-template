/**
 * Class : applicantInfoActions.js (Actions js are here)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////applicantInfoActions.js

function loadApplicantInfoFormDialog(){
    var title = 'Applicant Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"applicantInfo";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editApplicantInfoFormDialog(id){
    var title = 'Applicant Info';
    var containerId = '#commonPopup';
    var url =  baseHref+"applicantInfo/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadApplicantInfoFormScreen(){
    var url =  baseHref+"applicantInfo";
    commonScreenRenderer(url, "#applicantInfoContainer");
}
function editApplicantInfoFormScreen(id){
    var url =  baseHref+"applicantInfo/"+id;
    commonScreenRenderer(url, "#applicantInfoContainer");
}
function viewApplicantInfoFormScreen(id){
    var url =  baseHref+"applicantInfoViewForm/"+id;
    commonScreenRenderer(url, "#applicantInfoContainer");
}



function loadApplicantInfoForm(){
    hideValidationMessages();
    initializeApplicantInfoForm();
    $('#applicantInfo_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeApplicantInfoForm(){
    $("#applicantInfo_id").val('');
    // jsInputFieldInitialization
}

function editApplicantInfoForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getApplicantInfo/" + id,
        cache : false,
        success : function(applicantInfo) {
            $("#applicantInfo_id").val(applicantInfo.id);
            // jsInputFieldAssignment
            //$('#applicantInfo_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addInterviewInfoRow(){

 var rowCount = $('#interviewInfoTable tr').length-1;    $('#interviewInfoTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="interviewInfos.id_'+rowCount+'" name="interviewInfos['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Interview Type</label>		<input required="" type="text" 		class="form-control" id="interviewInfo_interviewType_'+rowCount+'"		 name="interviewInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Short Code</label>		<input required="" type="text" 		class="form-control" id="interviewInfo_shortCode_'+rowCount+'"		 name="interviewInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Total Marks</label>		<input required="" type="number" 		class="form-control" id="interviewInfo_totalMarks_'+rowCount+'"		 name="interviewInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Obtained Marks</label>		<input required="" type="number" 		class="form-control" id="interviewInfo_obtainedMarks_'+rowCount+'"		 name="interviewInfo[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Description</label><textarea required="" class="form-control" id="interviewInfo_description_'+rowCount+'" name="interviewInfo[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="interviewInfo_interviewerId_'+rowCount+'">    <option selected>Choose employee</option>'+employeeSelectOptions+'</select></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteInterviewInfoRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteInterviewInfoRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteApplicantInfoInterviewInfo/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete InterviewInfo");
					}
	});
}
}function addTraineeCoursesRow(){

 var rowCount = $('#traineeCoursesTable tr').length-1;    $('#traineeCoursesTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="traineeCoursess.id_'+rowCount+'" name="traineeCoursess['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="traineeCourses_courseId_'+rowCount+'">    <option selected>Choose course</option>'+courseSelectOptions+'</select></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Short Code</label>		<input required="" type="text" 		class="form-control" id="traineeCourses_shortCode_'+rowCount+'"		 name="traineeCourses[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteTraineeCoursesRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteTraineeCoursesRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteApplicantInfoTraineeCourses/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete TraineeCourses");
					}
	});
}
}

function saveApplicantInfo() {
    hideValidationMessages();
    var rowCount = $('#interviewInfoTable tr').length-1;
    var interviewInfoList = [];
    for (var i = 0; i < rowCount; i++) {
		var interviewInfo = {
interviewType : $('#interviewInfo_interviewType_'+i).val(),
shortCode : $('#interviewInfo_shortCode_'+i).val(),
totalMarks : $('#interviewInfo_totalMarks_'+i).val(),
obtainedMarks : $('#interviewInfo_obtainedMarks_'+i).val(),
description : $('#interviewInfo_description_'+i).val(),
interviewerId : $('#interviewInfo_interviewerId_'+i).val(),
		}
		interviewInfoList.push(interviewInfo);
	}
    var interviewInfoObj = Object.assign({}, interviewInfoList);
    console.log(interviewInfoObj);var rowCount = $('#traineeCoursesTable tr').length-1;
    var traineeCoursesList = [];
    for (var i = 0; i < rowCount; i++) {
		var traineeCourses = {
courseId : $('#traineeCourses_courseId_'+i).val(),
shortCode : $('#traineeCourses_shortCode_'+i).val(),
		}
		traineeCoursesList.push(traineeCourses);
	}
    var traineeCoursesObj = Object.assign({}, traineeCoursesList);
    console.log(traineeCoursesObj);
    
    var applicantInfo = {
        id : $("#id").val(),
        jobApplicationId : $("#jobApplicationId").val(),enrollmentId : $("#enrollmentId").val(),firstName : $("#firstName").val(),lastName : $("#lastName").val(),fatherName : $("#fatherName").val(),motherName : $("#motherName").val(),spouseName : $("#spouseName").val(),nationality : $("#nationality").val(),gender : $("#gender").val(),age : $("#age").val(),profilePic : $("#profilePic").val(),signature : $("#signature").val(),nidImage : $("#nidImage").val(),eduQualification : $("#eduQualification").val(),bloodGroup : $("#bloodGroup").val(),religion : $("#religion").val(),address : $("#address").val(),streetAddress : $("#streetAddress").val(),district : $("#district").val(),policeStation : $("#policeStation").val(),postCode : $("#postCode").val(),chairmanName : $("#chairmanName").val(),contactNo : $("#contactNo").val(),interviewInfo : interviewInfoObj,traineeCourses : traineeCoursesObj,postingId : $("#postingId").val(),email : $("#email").val(),password : $("#password").val(),isJoined : $("#isJoined").val(),
    };
    var url =  baseHref+"applicantInfo/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : applicantInfo,
        success : function(data) {
        	$('#applicantInfoContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveApplicantInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"applicantInfo/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#applicantInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteApplicantInfo(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"applicantInfo/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#applicantInfoContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}