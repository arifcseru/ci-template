<!-- /**
 * Class : applicantInfoFormView (applicantInfoForm View)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $applicantInfo->id;
//$field1 = $applicantInfo->field1;
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
				<!-- form role="form" action="<?php echo base_url() ?>applicantInfo/create" method="post" id="createApplicantInfo" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

				<input type="hidden" value="0" name="isApproved" id="isApproved" />
				<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="jobApplicationId" name="jobApplicationId">
                       <option value="">Select Job Application</option>
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
									<input required="" disabled type="text" class="form-control" id="enrollmentId" name="enrollmentId" value="<?php echo $enrollmentId; ?>" />
								</div>
							</div>
						</div>
<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_firstName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_lastName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_fatherName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $fatherName; ?>" />
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_motherName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="motherName" name="motherName" value="<?php echo $motherName; ?>" />
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_spouseName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="spouseName" name="spouseName" value="<?php echo $spouseName; ?>" />
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nationality_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality; ?>" />
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_gender_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" />
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
									<input required="" disabled type="text" class="form-control" id="profilePic" name="profilePic" value="<?php echo $profilePic; ?>" />
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_signature_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="signature" name="signature" value="<?php echo $signature; ?>" />
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nidImage_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="nidImage" name="nidImage" value="<?php echo $nidImage; ?>" />
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_eduQualification_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="eduQualification" name="eduQualification" value="<?php echo $eduQualification; ?>" />
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_bloodGroup_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="bloodGroup" name="bloodGroup" value="<?php echo $bloodGroup; ?>" />
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_religion_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion; ?>" />
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_address_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="address" name="address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_streetAddress_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="streetAddress" name="streetAddress"><?php echo $streetAddress; ?></textarea>
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
									<input required="" disabled type="text" class="form-control" id="postCode" name="postCode" value="<?php echo $postCode; ?>" />
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_chairmanName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="chairmanName" name="chairmanName" value="<?php echo $chairmanName; ?>" />
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_contactNo_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="contactNo" name="contactNo" value="<?php echo $contactNo; ?>" />
								</div>
							</div>
						</div><div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="postingId" name="postingId">
                       <option value="">Select Job Posting</option>
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
									<input required="" disabled type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div>
<!-- Password -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_password_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>" />
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

					

					<button class="btn btn-success" onclick="loadApplicantInfoFormUIToEdit(<?php echo $id; ?>)"><?php echo $this->lang->line('content_edit_label'); ?></button>
					<button class='btn btn-warning' onclick="loadApplicantInfoListUI()"> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<div class="clearfix"></div>
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
		<?php if ($id != null) {
			?>
			<!-- div class="card">
						<div class="card-header card-header-info">
							<h6 class="card-title">Special Links</h6>
						</div>
						<div class="card-body">
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'applicantInfo/approve/' . $id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'applicantInfo/delete/' . $id; ?>">Delete</a>
                         </div>
					</div-->
		<?php } ?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>