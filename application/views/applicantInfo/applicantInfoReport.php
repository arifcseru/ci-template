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
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_applicantInfoListReport_label'); ?></title>
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
								<h4><?php echo $this->lang->line('content_applicantInfoReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>applicantInfo/create"
					method="post" id="createApplicantInfo" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- Enrollment -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_enrollmentId_label'); ?></label> 
									<?php echo $enrollmentId; ?>
								</div>
							</div>
						</div>
<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_firstName_label'); ?></label> 
									<?php echo $firstName; ?>
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_lastName_label'); ?></label> 
									<?php echo $lastName; ?>
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_fatherName_label'); ?></label> 
									<?php echo $fatherName; ?>
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_motherName_label'); ?></label> 
									<?php echo $motherName; ?>
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_spouseName_label'); ?></label> 
									<?php echo $spouseName; ?>
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nationality_label'); ?></label> 
									<?php echo $nationality; ?>
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_gender_label'); ?></label> 
									<?php echo $gender; ?>
								</div>
							</div>
						</div>
<!-- Age -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_age_label'); ?></label> 
									<?php echo $age; ?>
								</div>
							</div>
						</div>
<!-- Profile Pic -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_profilePic_label'); ?></label> 
									<?php echo $profilePic; ?>
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_signature_label'); ?></label> 
									<?php echo $signature; ?>
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_nidImage_label'); ?></label> 
									<?php echo $nidImage; ?>
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_eduQualification_label'); ?></label> 
									<?php echo $eduQualification; ?>
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_bloodGroup_label'); ?></label> 
									<?php echo $bloodGroup; ?>
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_religion_label'); ?></label> 
									<?php echo $religion; ?>
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_address_label'); ?></label> 
									<?php echo $address; ?>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_streetAddress_label'); ?></label> 
									<?php echo $streetAddress; ?>
								</div>
							</div>
						</div>
<!-- District -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_district_label'); ?></label> 
									<?php echo $district; ?>
								</div>
							</div>
						</div>
<!-- Police Station -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_policeStation_label'); ?></label> 
									<?php echo $policeStation; ?>
								</div>
							</div>
						</div>
<!-- Post Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_postCode_label'); ?></label> 
									<?php echo $postCode; ?>
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_chairmanName_label'); ?></label> 
									<?php echo $chairmanName; ?>
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_contactNo_label'); ?></label> 
									<?php echo $contactNo; ?>
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_email_label'); ?></label> 
									<?php echo $email; ?>
								</div>
							</div>
						</div>
<!-- Password -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_password_label'); ?></label> 
									<?php echo $password; ?>
								</div>
							</div>
						</div>
<!-- Is Joined -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_applicantInfo_isJoined_label'); ?></label> 
									<?php echo $isJoined; ?>
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

		<script src="<?php echo base_url(); ?>js/applicantInfo/applicantInfoActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>