/**
 * Class : userActions.js (Actions js are here)
 * User Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////userActions.js

function loadUserFormDialog(){
    var title = 'User';
    var containerId = '#commonPopup';
    var url =  baseHref+"user";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editUserFormDialog(id){
    var title = 'User';
    var containerId = '#commonPopup';
    var url =  baseHref+"user/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadUserFormScreen(){
    var url =  baseHref+"user";
    commonScreenRenderer(url, "#userContainer");
}
function editUserFormScreen(id){
    var url =  baseHref+"user/"+id;
    commonScreenRenderer(url, "#userContainer");
}
function viewUserFormScreen(id){
    var url =  baseHref+"userViewForm/"+id;
    commonScreenRenderer(url, "#userContainer");
}



function loadUserForm(){
    hideValidationMessages();
    initializeUserForm();
    $('#user_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeUserForm(){
    $("#user_id").val('');
    // jsInputFieldInitialization
}

function editUserForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getUser/" + id,
        cache : false,
        success : function(user) {
            $("#user_id").val(user.id);
            // jsInputFieldAssignment
            //$('#user_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addCompanyProfileRow(){

 var rowCount = $('#companyProfileTable tr').length-1;    $('#companyProfileTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="companyProfiles.id_'+rowCount+'" name="companyProfiles['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Name</label>		<input required="" type="text" 		class="form-control" id="companyProfile_name_'+rowCount+'"		 name="companyProfile[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Address</label><textarea required="" class="form-control" id="companyProfile_address_'+rowCount+'" name="companyProfile[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Established Date</label>		<input required="" type="date" 		class="form-control" id="companyProfile_establishedDate_'+rowCount+'"		 name="companyProfile[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Email</label>		<input required="" type="text" 		class="form-control" id="companyProfile_email_'+rowCount+'"		 name="companyProfile[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Author Name</label>		<input required="" type="text" 		class="form-control" id="companyProfile_authorName_'+rowCount+'"		 name="companyProfile[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteCompanyProfileRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteCompanyProfileRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteUserCompanyProfile/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete CompanyProfile");
					}
	});
}
}

function saveUser() {
    hideValidationMessages();
    var rowCount = $('#companyProfileTable tr').length-1;
    var companyProfileList = [];
    for (var i = 0; i < rowCount; i++) {
		var companyProfile = {
name : $('#companyProfile_name_'+i).val(),
address : $('#companyProfile_address_'+i).val(),
establishedDate : $('#companyProfile_establishedDate_'+i).val(),
email : $('#companyProfile_email_'+i).val(),
authorName : $('#companyProfile_authorName_'+i).val(),
		}
		companyProfileList.push(companyProfile);
	}
    var companyProfileObj = Object.assign({}, companyProfileList);
    console.log(companyProfileObj);
    
    var user = {
        id : $("#id").val(),
        fullName : $("#fullName").val(),email : $("#email").val(),password : $("#password").val(),confirmPassword : $("#confirmPassword").val(),roleId : $("#roleId").val(),companyProfile : companyProfileObj,mobileNumber : $("#mobileNumber").val(),
    };
    var url =  baseHref+"user/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : user,
        success : function(data) {
        	$('#userContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveUser(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"user/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#userContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteUser(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"user/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#userContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}