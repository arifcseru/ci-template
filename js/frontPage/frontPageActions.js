/**
 * Class : frontPageActions.js (Actions js are here)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
////////////////////////////////////////////////////////////////////frontPageActions.js

function loadFrontPageFormDialog(){
    var title = 'Front Page';
    var containerId = '#commonPopup';
    var url =  baseHref+"frontPage";
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}
function editFrontPageFormDialog(id){
    var title = 'Front Page';
    var containerId = '#commonPopup';
    var url =  baseHref+"frontPage/"+id;
    var height = '500';
    var width = '700';
    loadCommonPopupDialog(title, containerId, url, height, width);
}

function loadFrontPageFormScreen(){
    var url =  baseHref+"frontPage";
    commonScreenRenderer(url, "#frontPageContainer");
}
function editFrontPageFormScreen(id){
    var url =  baseHref+"frontPage/"+id;
    commonScreenRenderer(url, "#frontPageContainer");
}
function viewFrontPageFormScreen(id){
    var url =  baseHref+"frontPageViewForm/"+id;
    commonScreenRenderer(url, "#frontPageContainer");
}



function loadFrontPageForm(){
    hideValidationMessages();
    initializeFrontPageForm();
    $('#frontPage_modal').modal('show');
}
function hideValidationMessages(){
    // hideValidationMessagesJS
	
}
function initializeFrontPageForm(){
    $("#frontPage_id").val('');
    // jsInputFieldInitialization
}

function editFrontPageForm(id) {
    hideValidationMessages();
    $.ajax({
        type : "GET",
        url :  baseHref+"getFrontPage/" + id,
        cache : false,
        success : function(frontPage) {
            $("#frontPage_id").val(frontPage.id);
            // jsInputFieldAssignment
            //$('#frontPage_modal').modal('show');
        },
        error : function(e, m) {
        }
    });
}

function addFeaturesRow(){

 var rowCount = $('#featuresTable tr').length-1;    $('#featuresTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="featuress.id_'+rowCount+'" name="featuress['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Icon</label>		<input required="" type="text" 		class="form-control" id="features_icon_'+rowCount+'"		 name="features[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Title</label>		<input required="" type="text" 		class="form-control" id="features_title_'+rowCount+'"		 name="features[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Description</label><textarea required="" class="form-control" id="features_description_'+rowCount+'" name="features[]"></textarea></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteFeaturesRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteFeaturesRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteFrontPageFeatures/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete Features");
					}
	});
}
}function addCharacteristicsRow(){

 var rowCount = $('#characteristicsTable tr').length-1;    $('#characteristicsTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="characteristicss.id_'+rowCount+'" name="characteristicss['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Icon</label>		<input required="" type="text" 		class="form-control" id="characteristics_icon_'+rowCount+'"		 name="characteristics[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Title</label>		<input required="" type="text" 		class="form-control" id="characteristics_title_'+rowCount+'"		 name="characteristics[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Description</label><textarea required="" class="form-control" id="characteristics_description_'+rowCount+'" name="characteristics[]"></textarea></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteCharacteristicsRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteCharacteristicsRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteFrontPageCharacteristics/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete Characteristics");
					}
	});
}
}function addProjectsRow(){

 var rowCount = $('#projectsTable tr').length-1;    $('#projectsTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="projectss.id_'+rowCount+'" name="projectss['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Name</label>		<input required="" type="text" 		class="form-control" id="projects_name_'+rowCount+'"		 name="projects[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Short Details</label><textarea required="" class="form-control" id="projects_shortDetails_'+rowCount+'" name="projects[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">Features</label><textarea required="" class="form-control" id="projects_features_'+rowCount+'" name="projects[]"></textarea></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteProjectsRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteProjectsRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteFrontPageProjects/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete Projects");
					}
	});
}
}function addPricingPlanRow(){

 var rowCount = $('#pricingPlanTable tr').length-1;    $('#pricingPlanTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="pricingPlans.id_'+rowCount+'" name="pricingPlans['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Type</label>		<input required="" type="text" 		class="form-control" id="pricingPlan_type_'+rowCount+'"		 name="pricingPlan[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Rate</label>		<input required="" type="text" 		class="form-control" id="pricingPlan_rate_'+rowCount+'"		 name="pricingPlan[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Unit</label>		<input required="" type="text" 		class="form-control" id="pricingPlan_unit_'+rowCount+'"		 name="pricingPlan[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Buy Link</label>		<input required="" type="text" 		class="form-control" id="pricingPlan_buyLink_'+rowCount+'"		 name="pricingPlan[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deletePricingPlanRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deletePricingPlanRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteFrontPagePricingPlan/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete PricingPlan");
					}
	});
}
}function addTeamRow(){

 var rowCount = $('#teamTable tr').length-1;    $('#teamTable').append(
'<tr>'+
'<input type="hidden" placeholder="Id" required="" id="teams.id_'+rowCount+'" name="teams['+rowCount+'].id" />'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Member Name</label>		<input required="" type="text" 		class="form-control" id="team_memberName_'+rowCount+'"		 name="team[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Designation</label>		<input required="" type="text" 		class="form-control" id="team_designation_'+rowCount+'"		 name="team[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group"><label class="bmd-label-floating">About</label><textarea required="" class="form-control" id="team_about_'+rowCount+'" name="team[]"></textarea></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Github Link</label>		<input required="" type="text" 		class="form-control" id="team_githubLink_'+rowCount+'"		 name="team[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Twitter Link</label>		<input required="" type="text" 		class="form-control" id="team_twitterLink_'+rowCount+'"		 name="team[]" value=""></div></td>'+
'<td><div class="form-group bmd-form-group">		<label class="bmd-label-floating">Facebook Link</label>		<input required="" type="text" 		class="form-control" id="team_facebookLink_'+rowCount+'"		 name="team[]" value=""></div></td>'+
'<td><button class="btn btn-danger btn-sm" onclick="deleteTeamRow(null,this)" ><i class="fa fa-trash"></i></button></td>'+

    '</tr>');
$('.basic-select2').select2();
}

function deleteTeamRow(id,element){
 if (id=="" || id==undefined|| id==null|| id=="null") {					$(element).parent().parent().remove();
return;
}
else{if(!confirm('Are you sure?')) return;$.ajax({
			type : "GET",
			url : "/template/deleteFrontPageTeam/" + id,
			cache : false,
			 success : function(data) {
					$(element).parent().parent().remove();
				},
					error : function(e, m) {
					//alert(m+ " on get method: delete Team");
					}
	});
}
}

function saveFrontPage() {
    hideValidationMessages();
    var rowCount = $('#featuresTable tr').length-1;
    var featuresList = [];
    for (var i = 0; i < rowCount; i++) {
		var features = {
icon : $('#features_icon_'+i).val(),
title : $('#features_title_'+i).val(),
description : $('#features_description_'+i).val(),
		}
		featuresList.push(features);
	}
    var featuresObj = Object.assign({}, featuresList);
    console.log(featuresObj);var rowCount = $('#characteristicsTable tr').length-1;
    var characteristicsList = [];
    for (var i = 0; i < rowCount; i++) {
		var characteristics = {
icon : $('#characteristics_icon_'+i).val(),
title : $('#characteristics_title_'+i).val(),
description : $('#characteristics_description_'+i).val(),
		}
		characteristicsList.push(characteristics);
	}
    var characteristicsObj = Object.assign({}, characteristicsList);
    console.log(characteristicsObj);var rowCount = $('#projectsTable tr').length-1;
    var projectsList = [];
    for (var i = 0; i < rowCount; i++) {
		var projects = {
name : $('#projects_name_'+i).val(),
shortDetails : $('#projects_shortDetails_'+i).val(),
features : $('#projects_features_'+i).val(),
		}
		projectsList.push(projects);
	}
    var projectsObj = Object.assign({}, projectsList);
    console.log(projectsObj);var rowCount = $('#pricingPlanTable tr').length-1;
    var pricingPlanList = [];
    for (var i = 0; i < rowCount; i++) {
		var pricingPlan = {
type : $('#pricingPlan_type_'+i).val(),
rate : $('#pricingPlan_rate_'+i).val(),
unit : $('#pricingPlan_unit_'+i).val(),
buyLink : $('#pricingPlan_buyLink_'+i).val(),
		}
		pricingPlanList.push(pricingPlan);
	}
    var pricingPlanObj = Object.assign({}, pricingPlanList);
    console.log(pricingPlanObj);var rowCount = $('#teamTable tr').length-1;
    var teamList = [];
    for (var i = 0; i < rowCount; i++) {
		var team = {
memberName : $('#team_memberName_'+i).val(),
designation : $('#team_designation_'+i).val(),
about : $('#team_about_'+i).val(),
githubLink : $('#team_githubLink_'+i).val(),
twitterLink : $('#team_twitterLink_'+i).val(),
facebookLink : $('#team_facebookLink_'+i).val(),
		}
		teamList.push(team);
	}
    var teamObj = Object.assign({}, teamList);
    console.log(teamObj);
    
    var frontPage = {
        id : $("#id").val(),
        title : $("#title").val(),heading : $("#heading").val(),headline : $("#headline").val(),description : $("#description").val(),specialLink : $("#specialLink").val(),linkType : $("#linkType").val(),detailsLink : $("#detailsLink").val(),detailsLinkText : $("#detailsLinkText").val(),contactUsHeadline : $("#contactUsHeadline").val(),footerMessage : $("#footerMessage").val(),footerLink : $("#footerLink").val(),facebookLink : $("#facebookLink").val(),githubLink : $("#githubLink").val(),twitterLink : $("#twitterLink").val(),linkedInLink : $("#linkedInLink").val(),features : featuresObj,characteristics : characteristicsObj,projects : projectsObj,pricingPlan : pricingPlanObj,team : teamObj,
    };
    var url =  baseHref+"frontPage/create";

    $.ajax({
        type : "POST",
        url : url,
        async : false,
        data : frontPage,
        success : function(data) {
        	$('#frontPageContainer').html(data);
        },
        error : function(err) {
            console.log(err);
            return false;
        }
    });
    return false;
}

function approveFrontPage(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"frontPage/approve/" + id,
        cache : false,
        success : function(data) {
        	$('#frontPageContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}
function deleteFrontPage(id) {
    if (!confirm('Are you sure?')){
        return;
    }
    $.ajax({
        type : "GET",
        url : baseHref+"frontPage/delete/" + id,
        cache : false,
        success : function(data) {
        	$('#frontPageContainer').html(data);  
        },
        error : function(e, m) {
                //alert(m+ " on get method: delete document");
        }
    });
}