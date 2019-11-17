<!-- /**
 * Class : employeeFormView (employeeForm View)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $employee->id;
//$field1 = $employee->field1;
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
				<!-- form role="form" action="<?php echo base_url() ?>employee/create" method="post" id="createEmployee" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

				<input type="hidden" value="0" name="isApproved" id="isApproved" />
				<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="companyProfileId" name="companyProfileId">
                       <option value="">Select Company Profile</option>
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
                       <option value="">Select Applicant Info</option>
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
									<input required="" disabled type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_lastName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_fatherName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="fatherName" name="fatherName" value="<?php echo $fatherName; ?>" />
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_motherName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="motherName" name="motherName" value="<?php echo $motherName; ?>" />
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_spouseName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="spouseName" name="spouseName" value="<?php echo $spouseName; ?>" />
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nationality_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality; ?>" />
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_gender_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" />
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
									<input required="" disabled type="text" class="form-control" id="profilePic" name="profilePic" value="<?php echo $profilePic; ?>" />
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_signature_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="signature" name="signature" value="<?php echo $signature; ?>" />
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nidImage_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="nidImage" name="nidImage" value="<?php echo $nidImage; ?>" />
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_eduQualification_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="eduQualification" name="eduQualification" value="<?php echo $eduQualification; ?>" />
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_bloodGroup_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="bloodGroup" name="bloodGroup" value="<?php echo $bloodGroup; ?>" />
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_religion_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="religion" name="religion" value="<?php echo $religion; ?>" />
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_address_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="address" name="address"><?php echo $address; ?></textarea>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_streetAddress_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="streetAddress" name="streetAddress"><?php echo $streetAddress; ?></textarea>
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
									<input required="" disabled type="text" class="form-control" id="postCode" name="postCode" value="<?php echo $postCode; ?>" />
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_chairmanName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="chairmanName" name="chairmanName" value="<?php echo $chairmanName; ?>" />
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_contactNo_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="contactNo" name="contactNo" value="<?php echo $contactNo; ?>" />
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_email_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div><div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="managerId" name="managerId">
                       <option value="">Select Employee</option>
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

					

					<button class="btn btn-success" onclick="loadEmployeeFormUIToEdit(<?php echo $id; ?>)"><?php echo $this->lang->line('content_edit_label'); ?></button>
					<button class='btn btn-warning' onclick="loadEmployeeListUI()"> <?php echo $this->lang->line('content_cancel_label'); ?></button>
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
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'employee/approve/' . $id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'employee/delete/' . $id; ?>">Delete</a>
                         </div>
					</div-->
		<?php } ?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/employee/employeeActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>