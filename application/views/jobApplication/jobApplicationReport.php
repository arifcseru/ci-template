<!-- /**
 * Class : jobApplicationForm (jobApplicationForm View)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $jobApplication->id;
// $field1 = $jobApplication->field1;
$jobPositionId = $jobApplication->jobPositionId;
$firstName = $jobApplication->firstName;
$lastName = $jobApplication->lastName;
$applicantPhoneNo = $jobApplication->applicantPhoneNo;
$email = $jobApplication->email;
$expectedSalary = $jobApplication->expectedSalary;
$message = $jobApplication->message;
$skills = $jobApplication->skills;
$resumeFileAddress = $jobApplication->resumeFileAddress;


$isApproved = $jobApplication->isApproved;
$createdBy = $jobApplication->createdBy;
$createdDate = $jobApplication->createdDate;

$updatedBy = $jobApplication->updatedBy;
$updatedDate = $jobApplication->updatedDate;
?>
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_jobApplicationListReport_label'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="stylesheet/text">
		.header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
        font-size: 35px;
    }
    
  </style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="row">
						<div class="col-md-12">
							<div class="header">
							
								<h2><?php echo $this->lang->line('header_title_label'); ?> </h2>
								<h2>Company: <?php echo $pageTitle; ?></h2>
								<h4><?php echo $this->lang->line('content_jobApplicationReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>jobApplication/create"
					method="post" id="createJobApplication" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_firstName_label'); ?></label> 
									<?php echo $firstName; ?>
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_lastName_label'); ?></label> 
									<?php echo $lastName; ?>
								</div>
							</div>
						</div>
<!-- Applicant Phone No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_applicantPhoneNo_label'); ?></label> 
									<?php echo $applicantPhoneNo; ?>
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_email_label'); ?></label> 
									<?php echo $email; ?>
								</div>
							</div>
						</div>
<!-- Expected Salary -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_expectedSalary_label'); ?><span style='color:red'>*</span></label> 
									<?php echo $expectedSalary; ?>
								</div>
							</div>
						</div>
<!-- Message -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_message_label'); ?></label> 
									<?php echo $message; ?>
								</div>
							</div>
						</div>
<!-- Skills -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_skills_label'); ?></label> 
									<?php echo $skills; ?>
								</div>
							</div>
						</div>
<!-- Resume File Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobApplication_resumeFileAddress_label'); ?></label> 
									<?php echo $resumeFileAddress; ?>
								</div>
							</div>
						</div>
							<!-- Another Row -->

							<!-- reportsGeneratesChildTabsHtml -->

						</div>
						<!-- </form> -->
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>js/jobApplication/jobApplicationActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>