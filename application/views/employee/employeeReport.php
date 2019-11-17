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
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_employeeListReport_label'); ?></title>
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
								<h4><?php echo $this->lang->line('content_employeeReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>employee/create"
					method="post" id="createEmployee" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- First Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_firstName_label'); ?></label> 
									<?php echo $firstName; ?>
								</div>
							</div>
						</div>
<!-- Last Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_lastName_label'); ?></label> 
									<?php echo $lastName; ?>
								</div>
							</div>
						</div>
<!-- Father Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_fatherName_label'); ?></label> 
									<?php echo $fatherName; ?>
								</div>
							</div>
						</div>
<!-- Mother Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_motherName_label'); ?></label> 
									<?php echo $motherName; ?>
								</div>
							</div>
						</div>
<!-- Spouse Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_spouseName_label'); ?></label> 
									<?php echo $spouseName; ?>
								</div>
							</div>
						</div>
<!-- Nationality -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nationality_label'); ?></label> 
									<?php echo $nationality; ?>
								</div>
							</div>
						</div>
<!-- Gender -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_gender_label'); ?></label> 
									<?php echo $gender; ?>
								</div>
							</div>
						</div>
<!-- Age -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_age_label'); ?></label> 
									<?php echo $age; ?>
								</div>
							</div>
						</div>
<!-- Profile Pic -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_profilePic_label'); ?></label> 
									<?php echo $profilePic; ?>
								</div>
							</div>
						</div>
<!-- Signature -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_signature_label'); ?></label> 
									<?php echo $signature; ?>
								</div>
							</div>
						</div>
<!-- Nid Image -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_nidImage_label'); ?></label> 
									<?php echo $nidImage; ?>
								</div>
							</div>
						</div>
<!-- Edu Qualification -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_eduQualification_label'); ?></label> 
									<?php echo $eduQualification; ?>
								</div>
							</div>
						</div>
<!-- Blood Group -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_bloodGroup_label'); ?></label> 
									<?php echo $bloodGroup; ?>
								</div>
							</div>
						</div>
<!-- Religion -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_religion_label'); ?></label> 
									<?php echo $religion; ?>
								</div>
							</div>
						</div>
<!-- Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_address_label'); ?></label> 
									<?php echo $address; ?>
								</div>
							</div>
						</div>
<!-- Street Address -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_streetAddress_label'); ?></label> 
									<?php echo $streetAddress; ?>
								</div>
							</div>
						</div>
<!-- District -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_district_label'); ?></label> 
									<?php echo $district; ?>
								</div>
							</div>
						</div>
<!-- Police Station -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_policeStation_label'); ?></label> 
									<?php echo $policeStation; ?>
								</div>
							</div>
						</div>
<!-- Post Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_postCode_label'); ?></label> 
									<?php echo $postCode; ?>
								</div>
							</div>
						</div>
<!-- Chairman Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_chairmanName_label'); ?></label> 
									<?php echo $chairmanName; ?>
								</div>
							</div>
						</div>
<!-- Contact No -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_contactNo_label'); ?></label> 
									<?php echo $contactNo; ?>
								</div>
							</div>
						</div>
<!-- Email -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employee_email_label'); ?></label> 
									<?php echo $email; ?>
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

		<script src="<?php echo base_url(); ?>js/employee/employeeActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>