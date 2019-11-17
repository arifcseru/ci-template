<!-- /**
 * Class : jobPositionFormView (jobPositionForm View)
 * Job Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php
$id = $jobPosition->id;
//$field1 = $jobPosition->field1;
$departmentId = $jobPosition->departmentId;
$positionName = $jobPosition->positionName;
$shortCode = $jobPosition->shortCode;
$description = $jobPosition->description;
$isActive = $jobPosition->isActive;


$createdBy = $jobPosition->createdBy;
$createdDate = $jobPosition->createdDate;

$updatedBy = $jobPosition->updatedBy;
$updatedDate = $jobPosition->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
		<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_jobPositionForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>jobPosition/create" method="post" id="createJobPosition" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="createdBy" id="createdBy" />
				<input type="hidden" value="<?php echo $createdBy; ?>" name="updatedBy" id="updatedBy" />

				<input type="hidden" value="0" name="isApproved" id="isApproved" />
				<input type="hidden" value="0" name="isDeleted" id="isDeleted" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
				<div class="form-group bmd-form-group">
					<select required="" class="form-control basic-select2" id="departmentId" name="departmentId">
                       <option value="">Select Department</option>
                        <?php
                          if(!empty($departments)){
                               foreach ($departments as $department){
                                                    ?>
                                                    <option value="<?php echo $department->id; ?>" <?php if($department->id == $id) {echo "selected=selected";} ?>><?php echo $department->name ?></option>
                                                    <?php
                                                }
                              }
                         ?>
                   </select>								</div>
							</div>

<!-- Position Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosition_positionName_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="positionName" name="positionName" value="<?php echo $positionName; ?>" />
								</div>
							</div>
						</div>
<!-- Short Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosition_shortCode_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="shortCode" name="shortCode" value="<?php echo $shortCode; ?>" />
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosition_description_label'); ?></label> 
									<textarea required="" disabled rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div>
<!-- Is Active -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosition_isActive_label'); ?></label> 
									<input required="" disabled type="text" class="form-control" id="isActive" name="isActive" value="<?php echo $isActive; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					

					<button class="btn btn-success" onclick="loadJobPositionFormUIToEdit(<?php echo $id; ?>)"><?php echo $this->lang->line('content_edit_label'); ?></button>
					<button class='btn btn-warning' onclick="loadJobPositionListUI()"> <?php echo $this->lang->line('content_cancel_label'); ?></button>
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
							 <a class="btn btn-success" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'jobPosition/approve/' . $id; ?>">Approve</a>
                             <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'jobPosition/delete/' . $id; ?>">Delete</a>
                         </div>
					</div-->
		<?php } ?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/jobPosition/jobPositionActions.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-selec2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>