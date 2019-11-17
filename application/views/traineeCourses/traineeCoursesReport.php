<!-- /**
 * Class : traineeCoursesForm (traineeCoursesForm View)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $traineeCourses->id;
// $field1 = $traineeCourses->field1;
$courseId = $traineeCourses->courseId;
$applicantInfoId = $traineeCourses->applicantInfoId;
$shortCode = $traineeCourses->shortCode;


$isApproved = $traineeCourses->isApproved;
$createdBy = $traineeCourses->createdBy;
$createdDate = $traineeCourses->createdDate;

$updatedBy = $traineeCourses->updatedBy;
$updatedDate = $traineeCourses->updatedDate;
?>
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_traineeCoursesListReport_label'); ?></title>
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
								<h4><?php echo $this->lang->line('content_traineeCoursesReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>traineeCourses/create"
					method="post" id="createTraineeCourses" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- Short Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_traineeCourses_shortCode_label'); ?></label> 
									<?php echo $shortCode; ?>
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

		<script src="<?php echo base_url(); ?>js/traineeCourses/traineeCoursesActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>