/**
 * Class : publicMenuActions.js (Actions js are here)
 * Public Menu Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////publicMenuActions.js

function loadPublicMenuFormDialog(){
    var title = 'Public Menu';
    var containerId = '#commonPopup';
    var url =  baseHref+"publicMenu";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editPublicMenuFormDialog(id){
    var title = 'Public Menu';
    var containerId = '#commonPopup';
    var url =  baseHref+"publicMenu/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadPublicMenuFormScreen(){
    var url =  baseHref+"publicMenu";
    commonScreenRenderer(url, "#publicMenuContainer");
}
function editPublicMenuFormScreen(id){
    var url =  baseHref+"publicMenu/"+id;
    commonScreenRenderer(url, "#publicMenuContainer");
}
function viewPublicMenuFormScreen(id){
    var url =  baseHref+"publicMenuViewForm/"+id;
    commonScreenRenderer(url, "#publicMenuContainer");
}



function loadPublicMenuForm(){
    hideValidationMessages();
    initializePublicMenuForm();
    $('#publicMenu_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializePublicMenuForm(){
    $("#publicMenu_id").val('');
    // jsInputFieldInitialization
}

function editPublicMenuForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getPublicMenu/" + id,
        cache : false,
        success : function(publicMenu) {
            $("#publicMenu_id").val(publicMenu.id);
            // jsInputFieldAssignment
            //$('#publicMenu_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}



function savePublicMenu() {
    hideValidationMessages();
    
    
    var publicMenu = {
        id : $("#id").val(),
        menuText : $("#menuText").val(),linkType : $("#linkType").val(),menuLinkUrl : $("#menuLinkUrl").val(),
    };
    var url =  baseHref+"publicMenu/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : publicMenu,
        success : function(data) {
        	$('#publicMenuContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approvePublicMenu(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"publicMenu/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#publicMenuContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deletePublicMenu(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"publicMenu/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#publicMenuContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}