<!-- /**
 * Class : employeePositionForm (employeePositionForm View)
 * Employee Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $employeePosition->id;
// $field1 = $employeePosition->field1;
$employeeId = $employeePosition->employeeId;
$jobPositionId = $employeePosition->jobPositionId;
$description = $employeePosition->description;


$isApproved = $employeePosition->isApproved;
$createdBy = $employeePosition->createdBy;
$createdDate = $employeePosition->createdDate;

$updatedBy = $employeePosition->updatedBy;
$updatedDate = $employeePosition->updatedDate;
?>
<!DOCTYPE html>

<head>
	<title><?php echo $this->lang->line('content_employeePositionListReport_label'); ?></title>
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
								<h4><?php echo $this->lang->line('content_employeePositionReportHeader_label'); ?></h4>
								<h6><?php echo $this->lang->line('content_generatedDate_label'); ?>: <?php
																										$createdDate  = date('Y-m-d H:i:s');
																										echo date("d/m/Y", strtotime($createdDate));
																										?></h6>
								<h6><?php echo $this->lang->line('content_generatedBy_label'); ?>: <?php echo $createdByUserName; ?></h6>
							</div>
						</div>
					</div>

					<div class="card-body">
						<!-- form role="form" action="<?php echo base_url() ?>employeePosition/create"
					method="post" id="createEmployeePosition" role="form"-->
						<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> <input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

						<input type="hidden" value="0" name="isApproved" id="isApproved" />
						<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

						<div class="mdc-layout-grid__inner">
							
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_employeePosition_description_label'); ?></label> 
									<?php echo $description; ?>
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

		<script src="<?php echo base_url(); ?>js/employeePosition/employeePositionActions.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.basic-select2').select2();
				$('.basic-multiple-select2').select2();
			});
		</script>

	</div>
</body>

</html>