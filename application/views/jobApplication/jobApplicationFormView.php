<!-- /**
 * Class : jobApplicationFormView (jobApplicationForm View)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $jobApplication->id;
//$field1 = $jobApplication->field1;
$jobPositionId = $jobApplication->jobPositionId;
$firstName = $jobApplication->firstName;
$lastName = $jobApplication->lastName;
$applicantPhoneNo = $jobApplication->applicantPhoneNo;
$email = $jobApplication->email;
$expectedSalary = $jobApplication->expectedSalary;
$message = $jobApplication->message;
$skills = $jobApplication->skills;
$resumeFileAddress = $jobApplication->resumeFileAddress;


$createdBy = $jobApplication->createdBy;
$createdDate = $jobApplication->createdDate;

$updatedBy = $jobApplication->updatedBy;
$updatedDate = $jobApplication->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
		<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_jobApplicationForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>jobApplication/create" method="post" id="createJobApplication" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

				<input type="hidden" value="0" name="isApproved" id="isApproved" />
				<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="jobPositionId" name="jobPositionId">
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

<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_firstName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_lastName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
								</div>
							</div>
						</div>
<!-- Applicant Phone No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_applicantPhoneNo_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="applicantPhoneNo" name="applicantPhoneNo" value="<?php echo $applicantPhoneNo; ?>" />
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_email_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
								</div>
							</div>
						</div>
<!-- Expected Salary -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_expectedSalary_label'); ?></label> 
									<input required="" type="number" class="form-control" id="expectedSalary" name="expectedSalary" value="<?php echo $expectedSalary; ?>" />
								</div>
							</div>
						</div>
<!-- Message -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_message_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="message" name="message"><?php echo $message; ?></textarea>
								</div>
							</div>
						</div>
<!-- Skills -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_skills_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="skills" name="skills" value="<?php echo $skills; ?>" />
								</div>
							</div>
						</div>
<!-- Resume File Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_resumeFileAddress_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="resumeFileAddress" name="resumeFileAddress" value="<?php echo $resumeFileAddress; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					

					<button class="btn btn-success" onclick="loadJobApplicationFormUIToEdit(<?php echo $id; ?>)"><?php echo $this->lang->line('content_edit_label'); ?></button>
					<button class='btn btn-warning' onclick="loadJobApplicationListUI()"> <?php echo $this->lang->line('content_cancel_label'); ?></button>
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
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'jobApplication/approve/' . $id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'jobApplication/delete/' . $id; ?>">Delete</a>
                         </div>
					</div-->
		<?php } ?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/jobApplication/jobApplicationActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>