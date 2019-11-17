<!-- /**
 * Class : applicantInfoForm (applicantInfoForm View)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $applicantInfo->id;
// $field1 = $applicantInfo->field1;
$jobApplicationId = $applicantInfo->jobApplicationId;
$enrollmentId = $applicantInfo->enrollmentId;
$firstName = $applicantInfo->firstName;
$lastName = $applicantInfo->lastName;
$fatherName = $applicantInfo->fatherName;
$motherName = $applicantInfo->motherName;
$spouseName = $applicantInfo->spouseName;
$nationality = $applicantInfo->nationality;
$gender = $applicantInfo->gender;
$age = $applicantInfo->age;
$profilePic = $applicantInfo->profilePic;
$signature = $applicantInfo->signature;
$nidImage = $applicantInfo->nidImage;
$eduQualification = $applicantInfo->eduQualification;
$bloodGroup = $applicantInfo->bloodGroup;
$religion = $applicantInfo->religion;
$address = $applicantInfo->address;
$streetAddress = $applicantInfo->streetAddress;
$district = $applicantInfo->district;
$policeStation = $applicantInfo->policeStation;
$postCode = $applicantInfo->postCode;
$chairmanName = $applicantInfo->chairmanName;
$contactNo = $applicantInfo->contactNo;
$InterviewInfo = $applicantInfo->InterviewInfo;
$TraineeCourses = $applicantInfo->TraineeCourses;
$postingId = $applicantInfo->postingId;
$email = $applicantInfo->email;
$password = $applicantInfo->password;
$isJoined = $applicantInfo->isJoined;


$isApproved = $applicantInfo->isApproved;

$createdBy = $applicantInfo->createdBy;
$createdDate = $applicantInfo->createdDate;

$updatedBy = $applicantInfo->updatedBy;
$updatedDate = $applicantInfo->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_applicantInfoForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>applicantInfo/create"
					method="post" id="createApplicantInfo" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="jobApplicationId" name="jobApplicationId">
                         <option value="0">Select Job Application</option>
                          <?php
                           if(!empty($jobApplications)){
                               foreach ($jobApplications as $jobApplication){
                                                    ?>
                                                    <option value="<?php echo $jobApplication->id; ?>" <?php if($jobApplication->id == $id) {echo "selected=selected";} ?>><?php echo $jobApplication->id ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Enrollment -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_enrollmentId_label'); ?></label> 
									<input required="" type="text" class="form-control" id="enrollmentId" name="enrollmentId" value="<?php echo $enrollmentId; ?>" />
								</div>
							</div>
						</div>
<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_firstName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_lastName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_fatherName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $fatherName; ?>" />
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_motherName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="motherName" name="motherName" value="<?php echo $motherName; ?>" />
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_spouseName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="spouseName" name="spouseName" value="<?php echo $spouseName; ?>" />
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nationality_label'); ?></label> 
									<input required="" type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality; ?>" />
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_gender_label'); ?></label> 
									<input required="" type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" />
								</div>
							</div>
						</div>
<!-- Age -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_age_label'); ?></label> 
									<input required="" type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" />
								</div>
							</div>
						</div>
<!-- Profile Pic -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_profilePic_label'); ?></label> 
									<input required="" type="text" class="form-control" id="profilePic" name="profilePic" value="<?php echo $profilePic; ?>" />
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_signature_label'); ?></label> 
									<input required="" type="text" class="form-control" id="signature" name="signature" value="<?php echo $signature; ?>" />
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nidImage_label'); ?></label> 
									<input required="" type="text" class="form-control" id="nidImage" name="nidImage" value="<?php echo $nidImage; ?>" />
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_eduQualification_label'); ?></label> 
									<input required="" type="text" class="form-control" id="eduQualification" name="eduQualification" value="<?php echo $eduQualification; ?>" />
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_bloodGroup_label'); ?></label> 
									<input required="" type="text" class="form-control" id="bloodGroup" name="bloodGroup" value="<?php echo $bloodGroup; ?>" />
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_religion_label'); ?></label> 
									<input required="" type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion; ?>" />
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_address_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="address" name="address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_streetAddress_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="streetAddress" name="streetAddress"><?php echo $streetAddress; ?></textarea>
								</div>
							</div>
						</div>
<!-- District -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_district_label'); ?></label> 
									<input required="" type="number" class="form-control" id="district" name="district" value="<?php echo $district; ?>" />
								</div>
							</div>
						</div>
<!-- Police Station -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_policeStation_label'); ?></label> 
									<input required="" type="number" class="form-control" id="policeStation" name="policeStation" value="<?php echo $policeStation; ?>" />
								</div>
							</div>
						</div>
<!-- Post Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_postCode_label'); ?></label> 
									<input required="" type="text" class="form-control" id="postCode" name="postCode" value="<?php echo $postCode; ?>" />
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_chairmanName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="chairmanName" name="chairmanName" value="<?php echo $chairmanName; ?>" />
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_contactNo_label'); ?></label> 
									<input required="" type="text" class="form-control" id="contactNo" name="contactNo" value="<?php echo $contactNo; ?>" />
								</div>
							</div>
						</div><div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="postingId" name="postingId">
                         <option value="0">Select Job Posting</option>
                          <?php
                           if(!empty($jobPostings)){
                               foreach ($jobPostings as $jobPosting){
                                                    ?>
                                                    <option value="<?php echo $jobPosting->id; ?>" <?php if($jobPosting->id == $id) {echo "selected=selected";} ?>><?php echo $jobPosting->positionName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_email_label'); ?></label> 
									<input required="" type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div>
<!-- Password -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_password_label'); ?></label> 
									<input required="" type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>" />
								</div>
							</div>
						</div>
<!-- Is Joined -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_isJoined_label'); ?></label> 
									<input required="" type="number" class="form-control" id="isJoined" name="isJoined" value="<?php echo $isJoined; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_applicantInfo_interviewInfo_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addInterviewInfoRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var employeeData = [
    <?php foreach ($employees as $key=>$value) {
		  echo "'".$value->lastName."',";
	}?>];
var employeeSelectOptions =     <?php foreach ($employees as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->lastName."</option>'+";	}?> ';'
  </script><table id="interviewInfoTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_applicantInfo_interviewType_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_shortCode_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_totalMarks_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_obtainedMarks_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_description_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_interviewerId_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($interviewInfos)) {
                                foreach ($interviewInfos as $index => $interviewInfo) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Interview Type</label> 
	<input required="" type="text" class="form-control" id="interviewInfo_interviewType_<?php echo $index;?>" value="<?php echo $interviewInfo->interviewType; ?>" name="interviewInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Short Code</label> 
	<input required="" type="text" class="form-control" id="interviewInfo_shortCode_<?php echo $index;?>" value="<?php echo $interviewInfo->shortCode; ?>" name="interviewInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Total Marks</label> 
	<input required="" type="number" class="form-control" id="interviewInfo_totalMarks_<?php echo $index;?>" value="<?php echo $interviewInfo->totalMarks; ?>" name="interviewInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Obtained Marks</label> 
	<input required="" type="number" class="form-control" id="interviewInfo_obtainedMarks_<?php echo $index;?>" value="<?php echo $interviewInfo->obtainedMarks; ?>" name="interviewInfo[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_description_label'); ?></label> 
	<textarea required="" class="form-control" id="interviewInfo_description_<?php echo $index;?>" name="interviewInfo[]"><?php echo $interviewInfo->description; ?></textarea>
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="interviewInfo_interviewerId_<?php echo $index;?>" value="<?php echo $interviewInfo->interviewerId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		if($key==$interviewInfo->interviewerId)
{  echo "<option selected value=".$value->id.">".$value->lastName."</option>";}
		 else { echo "<option value=".$value->id.">".$value->lastName."</option>";}
	}?></select>	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteInterviewInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_interviewType_label'); ?></label> 
		<input required="" type="text" class="form-control" id="interviewInfo_interviewType_0" name="interviewInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_shortCode_label'); ?></label> 
		<input required="" type="text" class="form-control" id="interviewInfo_shortCode_0" name="interviewInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_totalMarks_label'); ?></label> 
		<input required="" type="number" class="form-control" id="interviewInfo_totalMarks_0" name="interviewInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_obtainedMarks_label'); ?></label> 
		<input required="" type="number" class="form-control" id="interviewInfo_obtainedMarks_0" name="interviewInfo[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_description_label'); ?></label> 
		<textarea required="" class="form-control" id="interviewInfo_description_0" name="interviewInfo[]"></textarea>
		</div></td>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="interviewInfo_interviewerId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose employee</option>
    <?php foreach ($employees as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->lastName."</option>";
	}?></select>
			</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteInterviewInfoRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div><div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_applicantInfo_traineeCourses_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addTraineeCoursesRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var courseData = [
    <?php foreach ($courses as $key=>$value) {
		  echo "'".$value->shortCode."',";
	}?>];
var courseSelectOptions =     <?php foreach ($courses as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->shortCode."</option>'+";	}?> ';'
  </script><table id="traineeCoursesTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_applicantInfo_courseId_label'); ?></th>
<th><?php echo $this->lang->line('content_applicantInfo_shortCode_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($traineeCoursess)) {
                                foreach ($traineeCoursess as $index => $traineeCourses) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="traineeCourses_courseId_<?php echo $index;?>" value="<?php echo $traineeCourses->courseId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose course</option>
    <?php foreach ($courses as $key=>$value) {
		if($key==$traineeCourses->courseId)
{  echo "<option selected value=".$value->id.">".$value->shortCode."</option>";}
		 else { echo "<option value=".$value->id.">".$value->shortCode."</option>";}
	}?></select>	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Short Code</label> 
	<input required="" type="text" class="form-control" id="traineeCourses_shortCode_<?php echo $index;?>" value="<?php echo $traineeCourses->shortCode; ?>" name="traineeCourses[]">
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTraineeCoursesRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="traineeCourses_courseId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose course</option>
    <?php foreach ($courses as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->shortCode."</option>";
	}?></select>
			</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_shortCode_label'); ?></label> 
		<input required="" type="text" class="form-control" id="traineeCourses_shortCode_0" name="traineeCourses[]" value="">
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTraineeCoursesRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveApplicantInfo()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadApplicantInfoListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadApplicantInfoListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

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
							<button class="btn btn-success" onclick="approveApplicantInfo(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteApplicantInfo(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>