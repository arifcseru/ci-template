<!-- /**
 * Class : entityNameFormView (entityNameForm View)
 * Entity Name Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
 $id = $entityName->id;
 //$field1 = $entityName->field1;
 $name = $entityName->name;
$description = $entityName->description;
$EntityDetails = $entityName->EntityDetails;
$number = $entityName->number;

 
 $createdBy = $entityName->createdBy;
 $createdDate = $entityName->createdDate;
 
 $updatedBy = $entityName->updatedBy;
 $updatedDate = $entityName->updatedDate;
?>
<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header card-header-info">
							<h4 class="card-title"> Entity Name Form</h4>
							<p class="card-category"> Please Fillup the form</p>
						</div>
						<div class="card-body">
							<!-- form role="form" action="<?php echo base_url() ?>entityName/create" method="post" id="createEntityName" role="form"-->
             					<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" /> 
             					<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" /> 
             					<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />
             					
             					<input type="hidden" value="0" name="isApproved" id="isApproved" />
             					<input type="hidden" value="0" name="isDeleted" id="isDeleted" />
													
							<div class="mdc-layout-grid__inner">
								
<!-- Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Name<span style='color:red'>*</span></label> 
									<input required="" disabled type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" />
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Description<span style='color:red'>*</span></label> 
									<textarea required="" disabled rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div>
<!-- Number -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating">Number<span style='color:red'>*</span></label> 
									<input required="" disabled type="text" class="form-control" id="number" name="number" value="<?php echo $number; ?>" />
								</div>
							</div>
						</div>
								<!-- Another Row -->
								
								
								
									<button class="btn btn-success" onclick="loadEntityNameFormUIToEdit(<?php echo $id;?>)">Edit</button>
									<button class='btn btn-warning' onclick="loadEntityNameListUI()"> Cancel</button>
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
				<h6 class="card-title">Audit Log Info</h6>
			</div>
			<div class="card-body">
				<h6 class="card-category text-gray">Created By</h6>
				<h4 class="card-title"><?php echo $createdByUserName; ?></h4>

				<h6 class="card-category text-gray">Created Date</h6>
				<h4 class="card-title">
					<?php 
						echo date("d/m/Y", strtotime($createdDate));
					?>
				</h4>

				<h6 class="card-category text-gray">Updated By</h6>
				<h4 class="card-title"><?php echo $updatedByUserName; ?></h4>

				<h6 class="card-category text-gray">Updated Date</h6>
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
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url().'entityName/approve/'.$id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url().'entityName/delete/'.$id; ?>">Delete</a>
                         </div>
					</div-->
					<?php }?>
				</div>
			</div>

<script src="<?php echo base_url(); ?>js/entityName/entityNameActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
	</script>