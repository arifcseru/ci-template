/**
 * Class : branchActions.js (Actions js are here)
 * Branch Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////branchActions.js

function loadBranchFormDialog(){
    var title = 'Branch';
    var containerId = '#commonPopup';
    var url =  baseHref+"branch";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editBranchFormDialog(id){
    var title = 'Branch';
    var containerId = '#commonPopup';
    var url =  baseHref+"branch/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadBranchFormScreen(){
    var url =  baseHref+"branch";
    commonScreenRenderer(url, "#branchContainer");
}
function editBranchFormScreen(id){
    var url =  baseHref+"branch/"+id;
    commonScreenRenderer(url, "#branchContainer");
}
function viewBranchFormScreen(id){
    var url =  baseHref+"branchViewForm/"+id;
    commonScreenRenderer(url, "#branchContainer");
}



function loadBranchForm(){
    hideValidationMessages();
    initializeBranchForm();
    $('#branch_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeBranchForm(){
    $("#branch_id").val('');
    // jsInputFieldInitialization
}

function editBranchForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getBranch/" + id,
        cache : false,
        success : function(branch) {
            $("#branch_id").val(branch.id);
            // jsInputFieldAssignment
            //$('#branch_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function saveBranch() {
    hideValidationMessages();
    
    
    var branch = {
        id : $("#id").val(),
        companyProfileId : $("#companyProfileId").val(),name : $("#name").val(),address : $("#address").val(),establishedDate : $("#establishedDate").val(),
    };
    var url =  baseHref+"branch/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : branch,
        success : function(data) {
        	$('#branchContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveBranch(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"branch/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#branchContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteBranch(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"branch/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#branchContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}