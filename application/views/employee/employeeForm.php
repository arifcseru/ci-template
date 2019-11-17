<!-- /**
 * Class : employeeForm (employeeForm View)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $employee->id;
// $field1 = $employee->field1;
$companyProfileId = $employee->companyProfileId;
$TrainingInfo = $employee->TrainingInfo;
$EmpDocInfo = $employee->EmpDocInfo;
$applicantId = $employee->applicantId;
$firstName = $employee->firstName;
$lastName = $employee->lastName;
$fatherName = $employee->fatherName;
$motherName = $employee->motherName;
$spouseName = $employee->spouseName;
$nationality = $employee->nationality;
$gender = $employee->gender;
$age = $employee->age;
$profilePic = $employee->profilePic;
$signature = $employee->signature;
$nidImage = $employee->nidImage;
$eduQualification = $employee->eduQualification;
$bloodGroup = $employee->bloodGroup;
$religion = $employee->religion;
$address = $employee->address;
$streetAddress = $employee->streetAddress;
$district = $employee->district;
$policeStation = $employee->policeStation;
$postCode = $employee->postCode;
$chairmanName = $employee->chairmanName;
$contactNo = $employee->contactNo;
$email = $employee->email;
$managerId = $employee->managerId;


$isApproved = $employee->isApproved;

$createdBy = $employee->createdBy;
$createdDate = $employee->createdDate;

$updatedBy = $employee->updatedBy;
$updatedDate = $employee->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_employeeForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>employee/create"
					method="post" id="createEmployee" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="companyProfileId" name="companyProfileId">
                         <option value="0">Select Company Profile</option>
                          <?php
                           if(!empty($companyProfiles)){
                               foreach ($companyProfiles as $companyProfile){
                                                    ?>
                                                    <option value="<?php echo $companyProfile->id; ?>" <?php if($companyProfile->id == $id) {echo "selected=selected";} ?>><?php echo $companyProfile->name ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>
<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="applicantId" name="applicantId">
                         <option value="0">Select Applicant Info</option>
                          <?php
                           if(!empty($applicantInfos)){
                               foreach ($applicantInfos as $applicantInfo){
                                                    ?>
                                                    <option value="<?php echo $applicantInfo->id; ?>" <?php if($applicantInfo->id == $id) {echo "selected=selected";} ?>><?php echo $applicantInfo->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_firstName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_lastName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_fatherName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $fatherName; ?>" />
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_motherName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="motherName" name="motherName" value="<?php echo $motherName; ?>" />
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_spouseName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="spouseName" name="spouseName" value="<?php echo $spouseName; ?>" />
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nationality_label'); ?></label> 
									<input required="" type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality; ?>" />
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_gender_label'); ?></label> 
									<input required="" type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" />
								</div>
							</div>
						</div>
<!-- Age -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_age_label'); ?></label> 
									<input required="" type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" />
								</div>
							</div>
						</div>
<!-- Profile Pic -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_profilePic_label'); ?></label> 
									<input required="" type="text" class="form-control" id="profilePic" name="profilePic" value="<?php echo $profilePic; ?>" />
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_signature_label'); ?></label> 
									<input required="" type="text" class="form-control" id="signature" name="signature" value="<?php echo $signature; ?>" />
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nidImage_label'); ?></label> 
									<input required="" type="text" class="form-control" id="nidImage" name="nidImage" value="<?php echo $nidImage; ?>" />
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_eduQualification_label'); ?></label> 
									<input required="" type="text" class="form-control" id="eduQualification" name="eduQualification" value="<?php echo $eduQualification; ?>" />
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_bloodGroup_label'); ?></label> 
									<input required="" type="text" class="form-control" id="bloodGroup" name="bloodGroup" value="<?php echo $bloodGroup; ?>" />
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_religion_label'); ?></label> 
									<input required="" type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion; ?>" />
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_address_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="address" name="address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_streetAddress_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="streetAddress" name="streetAddress"><?php echo $streetAddress; ?></textarea>
								</div>
							</div>
						</div>
<!-- District -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_district_label'); ?></label> 
									<input required="" type="number" class="form-control" id="district" name="district" value="<?php echo $district; ?>" />
								</div>
							</div>
						</div>
<!-- Police Station -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_policeStation_label'); ?></label> 
									<input required="" type="number" class="form-control" id="policeStation" name="policeStation" value="<?php echo $policeStation; ?>" />
								</div>
							</div>
						</div>
<!-- Post Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_postCode_label'); ?></label> 
									<input required="" type="text" class="form-control" id="postCode" name="postCode" value="<?php echo $postCode; ?>" />
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_chairmanName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="chairmanName" name="chairmanName" value="<?php echo $chairmanName; ?>" />
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_contactNo_label'); ?></label> 
									<input required="" type="text" class="form-control" id="contactNo" name="contactNo" value="<?php echo $contactNo; ?>" />
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_email_label'); ?></label> 
									<input required="" type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div><div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="managerId" name="managerId">
                         <option value="0">Select Employee</option>
                          <?php
                           if(!empty($employees)){
                               foreach ($employees as $employee){
                                                    ?>
                                                    <option value="<?php echo $employee->id; ?>" <?php if($employee->id == $id) {echo "selected=selected";} ?>><?php echo $employee->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_employee_trainingInfo_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addTrainingInfoRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var courseData = [
    <?php foreach ($courses as $key=>$value) {
		  echo "'".$value->shortCode."',";
	}?>];
var courseSelectOptions =     <?php foreach ($courses as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->shortCode."</option>'+";	}?> ';'
  </script><script>var employeeData = [
    <?php foreach ($employees as $key=>$value) {
		  echo "'".$value->lastName."',";
	}?>];
var employeeSelectOptions =     <?php foreach ($employees as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->lastName."</option>'+";	}?> ';'
  </script><table id="trainingInfoTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_employee_courseId_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_shortCode_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_description_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_supervisorId_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($trainingInfos)) {
                                foreach ($trainingInfos as $index => $trainingInfo) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingInfo_courseId_<?php echo $index;?>" value="<?php echo $trainingInfo->courseId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose course</option>
    <?php foreach ($courses as $key=>$value) {
		if($key==$trainingInfo->courseId)
{  echo "<option selected value=".$value->id.">".$value->shortCode."</option>";}
		 else { echo "<option value=".$value->id.">".$value->shortCode."</option>";}
	}?></select>	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Short Code</label> 
	<input required="" type="text" class="form-control" id="trainingInfo_shortCode_<?php echo $index;?>" value="<?php echo $trainingInfo->shortCode; ?>" name="trainingInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_description_label'); ?></label> 
	<textarea required="" class="form-control" id="trainingInfo_description_<?php echo $index;?>" name="trainingInfo[]"><?php echo $trainingInfo->description; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingInfo_supervisorId_<?php echo $index;?>" value="<?php echo $trainingInfo->supervisorId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		if($key==$trainingInfo->supervisorId)
{  echo "<option selected value=".$value->id.">".$value->lastName."</option>";}
		 else { echo "<option value=".$value->id.">".$value->lastName."</option>";}
	}?></select>	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingInfo_courseId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose course</option>
    <?php foreach ($courses as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->shortCode."</option>";
	}?></select>
			</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_shortCode_label'); ?></label> 
		<input required="" type="text" class="form-control" id="trainingInfo_shortCode_0" name="trainingInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_description_label'); ?></label> 
		<textarea required="" class="form-control" id="trainingInfo_description_0" name="trainingInfo[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingInfo_supervisorId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->lastName."</option>";
	}?></select>
			</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_employee_empDocInfo_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addEmpDocInfoRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><table id="empDocInfoTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_employee_documentName_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_documentDetails_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_tags_label'); ?></th>
<th><?php echo $this->lang->line('content_employee_document_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($empDocInfos)) {
                                foreach ($empDocInfos as $index => $empDocInfo) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Document Name</label> 
	<input required="" type="text" class="form-control" id="empDocInfo_documentName_<?php echo $index;?>" value="<?php echo $empDocInfo->documentName; ?>" name="empDocInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_documentDetails_label'); ?></label> 
	<textarea required="" class="form-control" id="empDocInfo_documentDetails_<?php echo $index;?>" name="empDocInfo[]"><?php echo $empDocInfo->documentDetails; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Tags</label> 
	<input required="" type="text" class="form-control" id="empDocInfo_tags_<?php echo $index;?>" value="<?php echo $empDocInfo->tags; ?>" name="empDocInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Document</label> 
	<input required="" type="text" class="form-control" id="empDocInfo_document_<?php echo $index;?>" value="<?php echo $empDocInfo->document; ?>" name="empDocInfo[]">
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteEmpDocInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_documentName_label'); ?></label> 
		<input required="" type="text" class="form-control" id="empDocInfo_documentName_0" name="empDocInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_documentDetails_label'); ?></label> 
		<textarea required="" class="form-control" id="empDocInfo_documentDetails_0" name="empDocInfo[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_tags_label'); ?></label> 
		<input required="" type="text" class="form-control" id="empDocInfo_tags_0" name="empDocInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_document_label'); ?></label> 
		<input required="" type="text" class="form-control" id="empDocInfo_document_0" name="empDocInfo[]" value="">
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteEmpDocInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveEmployee()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadEmployeeListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadEmployeeListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

					<?php
					} ?>
					<div class="clearfix"></div>
					* <?php echo $this->lang->line('content_formRequired_label'); ?>
				</div>
				<!-- </form> -->
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
			<div class="card-header card-header-info">
				<h6 class="card-title"><?php echo $this->lang->line('content_auditLogInfo_label'); ?></h6>
			</div>
			<div class="card-body">
				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_createdBy_label'); ?></h6>
				<h4 class="card-title"><?php echo $createdByUserName; ?></h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_createdDate_label'); ?></h6>
				<h4 class="card-title">
					<?php
					echo date("d/m/Y", strtotime($createdDate));
					?>
				</h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_updatedBy_label'); ?></h6>
				<h4 class="card-title"><?php echo $updatedByUserName; ?></h4>

				<h6 class="card-category text-gray"><?php echo $this->lang->line('content_updatedDate_label'); ?></h6>
				<h4 class="card-title">
					<?php
					echo date("d/m/Y", strtotime($updatedDate));
					?>
				</h4>

				<!-- p class="card-description">Don't be scared of the truth because
								we need to restart the human foundation in truth And I love you
								like Kanye loves Kanye I love Rick Owens’ bed design but the
								back is...</p-->
			</div>
		</div>

		<?php
		if ($role!=null && $role == ROLE_APPROVER_ADMIN) {
			if ($id != null) {
				?>
				<div class="card">
					<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
					<div class="card-header card-header-info">
						<h6 class="card-title"><?php echo $this->lang->line('content_specialLinks_label'); ?></h6>
					</div>
					<div class="card-body">
						<?php
								if ($isApproved == "1") {
									?>
							<button disabled class="btn btn-info"><?php echo $this->lang->line('content_approved_label'); ?></button>
						<?php
								} else {
									?>
							<button class="btn btn-success" onclick="approveEmployee(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteEmployee(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/employee/employeeActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>