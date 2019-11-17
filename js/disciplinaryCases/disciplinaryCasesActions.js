/**
 * Class : disciplinaryCasesActions.js (Actions js are here)
 * Disciplinary Cases Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////disciplinaryCasesActions.js

function loadDisciplinaryCasesFormDialog(){
    var title = 'Disciplinary Cases';
    var containerId = '#commonPopup';
    var url =  baseHref+"disciplinaryCases";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editDisciplinaryCasesFormDialog(id){
    var title = 'Disciplinary Cases';
    var containerId = '#commonPopup';
    var url =  baseHref+"disciplinaryCases/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadDisciplinaryCasesFormScreen(){
    var url =  baseHref+"disciplinaryCases";
    commonScreenRenderer(url, "#disciplinaryCasesContainer");
}
function editDisciplinaryCasesFormScreen(id){
    var url =  baseHref+"disciplinaryCases/"+id;
    commonScreenRenderer(url, "#disciplinaryCasesContainer");
}
function viewDisciplinaryCasesFormScreen(id){
    var url =  baseHref+"disciplinaryCasesViewForm/"+id;
    commonScreenRenderer(url, "#disciplinaryCasesContainer");
}



function loadDisciplinaryCasesForm(){
    hideValidationMessages();
    initializeDisciplinaryCasesForm();
    $('#disciplinaryCases_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeDisciplinaryCasesForm(){
    $("#disciplinaryCases_id").val('');
    // jsInputFieldInitialization
}

function editDisciplinaryCasesForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getDisciplinaryCases/" + id,
        cache : false,
        success : function(disciplinaryCases) {
            $("#disciplinaryCases_id").val(disciplinaryCases.id);
            // jsInputFieldAssignment
            //$('#disciplinaryCases_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveDisciplinaryCases() {
    hideValidationMessages();
    
    
    var disciplinaryCases = {
        id : $("#id").val(),
        employeeId : $("#employeeId").val(),caseName : $("#caseName").val(),description : $("#description").val(),
    };
    var url =  baseHref+"disciplinaryCases/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : disciplinaryCases,
        success : function(data) {
        	$('#disciplinaryCasesContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveDisciplinaryCases(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"disciplinaryCases/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#disciplinaryCasesContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteDisciplinaryCases(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"disciplinaryCases/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#disciplinaryCasesContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}