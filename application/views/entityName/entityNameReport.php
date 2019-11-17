<!-- /**
 * Class : entityNameForm (entityNameForm View)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $entityName->id;
// $field1 = $entityName->field1;
$name = $entityName->name;
$description = $entityName->description;
$EntityDetails = $entityName->EntityDetails;
$number = $entityName->number;


$isApproved = $entityName->isApproved;
$createdBy = $entityName->createdBy;
$createdDate = $entityName->createdDate;

$updatedBy = $entityName->updatedBy;
$updatedDate = $entityName->updatedDate;
?>
 <!DOCTYPE html>
<head>
  <title>Entity Name : Report</title>
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
						<h2>Company Limited</h2>
						<h4>Entity Name List</h4>
						<h6>Generated Date: 23/05/2019</h6>
					</div>
				</div>
			</div>

			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>entityName/create"
					method="post" id="createEntityName" role="form"-->
					<input type="hidden" value="<?php echo $id; ?>"
						name="id" id="id" /> <input
						type="hidden" value="<?php echo $createdBy; ?>" name="createdBy"
						id="createdBy" /> <input type="hidden"
						value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

					<input type="hidden" value="0" name="isApproved" id="isApproved" />
					<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

					<div class="mdc-layout-grid__inner">
						
<!-- Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Name<span style='color:red'>*</span></label> 
									<?php echo $name; ?>
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Description<span style='color:red'>*</span></label> 
									<?php echo $description; ?>
								</div>
							</div>
						</div>
<!-- Number -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Number<span style='color:red'>*</span></label> 
									<?php echo $number; ?>
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

<script src="<?php echo base_url(); ?>js/entityName/entityNameActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
	</script>

</div>
</body>
</html>