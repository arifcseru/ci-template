////////////////////////////////////////////////////////////////////entityNameActions.js

function loadEntityNameFormDialog(){
    var title = 'EntityNameInSentence';
    var containerId = '#commonPopup';
    var url =  "/moduleName/entityNameForm";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEntityNameFormDialog(id){
    var title = 'EntityNameInSentence';
    var containerId = '#commonPopup';
    var url =  "/moduleName/entityNameForm/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEntityNameFormScreen(){
    var url =  "/moduleName/entityNameForm";
    commonScreenRenderer(url, "#entityNameContainer");
}
function editEntityNameFormScreen(id){
    var url =  "/moduleName/entityNameForm/"+id;
    commonScreenRenderer(url, "#entityNameContainer");
}
function viewEntityNameFormScreen(id){
    var url =  "/moduleName/entityNameViewForm/"+id;
    commonScreenRenderer(url, "#entityNameContainer");
}



function loadEntityNameForm(){
    hideValidationMessages();
    initializeEntityNameForm();
    $('#entityName_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeEntityNameForm(){
    $("#entityName_id").val('');
    // jsInputFieldInitialization
}

function editEntityNameForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  "/moduleName/getEntityName/" + id,
        cache : false,
        success : function(entityName) {
            $("#entityName_id").val(entityName.id);
            // jsInputFieldAssignment
            $('#entityName_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

// childRowAddFunctionsJS

function saveEntityName() {
    hideValidationMessages();
    // jsDependentEntityAssignments
    var entityName = {
        id : $("#entityName_id").val(),
        // saveFormAjaxFields
    };
    var url =  "/moduleName/saveEntityNameJson";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : JSON.stringify(entityName),
        contentType : "application/json",
        success : function(data) {
            let isEmpty = jQuery.isEmptyObject(data.messages);
            if (isEmpty) {
                    var url =  "/moduleName/entityNameList";// basicSetup/bankAccount/bankAccountList
                    commonScreenRenderer(url, "#entityNameContainer");
            }else{
                    // showValidationMessagesJS
            }
            return false;
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;

}
function approveEntityName(id, element) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/moduleName/approveEntityName/" + id,
        cache : false,
        success : function(data) {
             loadEntityNameListUI();   
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEntityName(id, element) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/moduleName/deleteEntityName/" + id,
        cache : false,
        success : function(data) {
             loadEntityNameListUI();   
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}