/**
 * Class : entityNameActions.js (Actions js are here)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////entityNameActions.js

function loadEntityNameFormDialog(){
    var title = 'Entity Name';
    var containerId = '#commonPopup';
    var url =  "/template/entityName";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editEntityNameFormDialog(id){
    var title = 'Entity Name';
    var containerId = '#commonPopup';
    var url =  "/template/entityName/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadEntityNameFormScreen(){
    var url =  "/template/entityName";
    commonScreenRenderer(url, "#entityNameContainer");
}
function editEntityNameFormScreen(id){
    var url =  "/template/entityName/"+id;
    commonScreenRenderer(url, "#entityNameContainer");
}
function viewEntityNameFormScreen(id){
    var url =  "/template/entityNameViewForm/"+id;
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
        url :  "/template/getEntityName/" + id,
        cache : false,
        success : function(entityName) {
            $("#entityName_id").val(entityName.id);
            // jsInputFieldAssignment
            //$('#entityName_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addEntityDetailsRow(){

 var rowCount = $('#entityDetailsTable tr').length-1;    $('#entityDetailsTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="entityDetailss.id_'+rowCount+'" name="entityDetailss['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group"> <select class="selectpicker basic-select2" id="entityDetails_userId_'+rowCount+'">    <option selected>Choose user</option>'+userSelectOptions+'</select></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Text Box</label>		<input required="" type="text" 		class="form-control" id="entityDetails_textBox_'+rowCount+'"		 name="entityDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Date</label>		<input required="" type="date" 		class="form-control" id="entityDetails_date_'+rowCount+'"		 name="entityDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Number</label>		<input required="" type="number" 		class="form-control" id="entityDetails_number_'+rowCount+'"		 name="entityDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Boolean</label>		<input required="" type="checkbox" 		class="form-control" id="entityDetails_boolean_'+rowCount+'"		 name="entityDetails[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Text</label><textarea required="" class="form-control" id="entityDetails_text_'+rowCount+'" name="entityDetails[]"></textarea></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteEntityDetailsRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteEntityDetailsRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteEntityNameEntityDetails/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete EntityDetails");
					}
	});
}
}

function saveEntityName() {
    hideValidationMessages();
    var rowCount = $('#entityDetailsTable tr').length-1;
    var entityDetailsList = [];
    for (var i = 0; i < rowCount; i++) {
		var entityDetails = {
userId : $('#entityDetails_userId_'+i).val(),
textBox : $('#entityDetails_textBox_'+i).val(),
date : $('#entityDetails_date_'+i).val(),
number : $('#entityDetails_number_'+i).val(),
boolean : $('#entityDetails_boolean_'+i).val(),
text : $('#entityDetails_text_'+i).val(),
		}
		entityDetailsList.push(entityDetails);
	}
    var entityDetailsObj = Object.assign({}, entityDetailsList);
    console.log(entityDetailsObj);
    
    var entityName = {
        id : $("#id").val(),
        name : $("#name").val(),description : $("#description").val(),entityDetails : entityDetailsObj,number : $("#number").val(),
    };
    var url =  "/template/entityName/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : entityName,
        success : function(data) {
        	$('#entityNameContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveEntityName(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/template/entityName/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#entityNameContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteEntityName(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : "/template/entityName/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#entityNameContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}