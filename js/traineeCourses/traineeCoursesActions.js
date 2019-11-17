/**
 * Class : traineeCoursesActions.js (Actions js are here)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////traineeCoursesActions.js

function loadTraineeCoursesFormDialog(){
    var title = 'Trainee Courses';
    var containerId = '#commonPopup';
    var url =  baseHref+"traineeCourses";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editTraineeCoursesFormDialog(id){
    var title = 'Trainee Courses';
    var containerId = '#commonPopup';
    var url =  baseHref+"traineeCourses/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadTraineeCoursesFormScreen(){
    var url =  baseHref+"traineeCourses";
    commonScreenRenderer(url, "#traineeCoursesContainer");
}
function editTraineeCoursesFormScreen(id){
    var url =  baseHref+"traineeCourses/"+id;
    commonScreenRenderer(url, "#traineeCoursesContainer");
}
function viewTraineeCoursesFormScreen(id){
    var url =  baseHref+"traineeCoursesViewForm/"+id;
    commonScreenRenderer(url, "#traineeCoursesContainer");
}



function loadTraineeCoursesForm(){
    hideValidationMessages();
    initializeTraineeCoursesForm();
    $('#traineeCourses_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeTraineeCoursesForm(){
    $("#traineeCourses_id").val('');
    // jsInputFieldInitialization
}

function editTraineeCoursesForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getTraineeCourses/" + id,
        cache : false,
        success : function(traineeCourses) {
            $("#traineeCourses_id").val(traineeCourses.id);
            // jsInputFieldAssignment
            //$('#traineeCourses_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveTraineeCourses() {
    hideValidationMessages();
    
    
    var traineeCourses = {
        id : $("#id").val(),
        courseId : $("#courseId").val(),applicantInfoId : $("#applicantInfoId").val(),shortCode : $("#shortCode").val(),
    };
    var url =  baseHref+"traineeCourses/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : traineeCourses,
        success : function(data) {
        	$('#traineeCoursesContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveTraineeCourses(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"traineeCourses/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#traineeCoursesContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteTraineeCourses(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"traineeCourses/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#traineeCoursesContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}