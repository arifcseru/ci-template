<!-- /**
 * Class : jobPostingForm (jobPostingForm View)
 * Job Posting Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $jobPosting->id;
// $field1 = $jobPosting->field1;
$positionName = $jobPosting->positionName;
$shortCode = $jobPosting->shortCode;
$description = $jobPosting->description;
$jobPositionId = $jobPosting->jobPositionId;
$postingDate = $jobPosting->postingDate;
$expireDate = $jobPosting->expireDate;


$isApproved = $jobPosting->isApproved;

$createdBy = $jobPosting->createdBy;
$createdDate = $jobPosting->createdDate;

$updatedBy = $jobPosting->updatedBy;
$updatedDate = $jobPosting->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_jobPostingForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>jobPosting/create"
					method="post" id="createJobPosting" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					
<!-- Position Name -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosting_positionName_label'); ?></label> 
									<input required="" type="text" class="form-control" id="positionName" name="positionName" value="<?php echo $positionName; ?>" />
								</div>
							</div>
						</div>
<!-- Short Code -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosting_shortCode_label'); ?></label> 
									<input required="" type="text" class="form-control" id="shortCode" name="shortCode" value="<?php echo $shortCode; ?>" />
								</div>
							</div>
						</div>
<!-- Description -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_jobPosting_description_label'); ?></label> 
									<textarea required="" rows="5" class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
								</div>
							</div>
						</div><div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="jobPositionId" name="jobPositionId">
                         <option value="0">Select Job Position</option>
                          <?php
                           if(!empty($jobPositions)){
                               foreach ($jobPositions as $jobPosition){
                                                    ?>
                                                    <option value="<?php echo $jobPosition->id; ?>" <?php if($jobPosition->id == $id) {echo "selected=selected";} ?>><?php echo $jobPosition->positionName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Posting Date -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label"><?php echo $this->lang->line('content_jobPosting_postingDate_label'); ?></label> 
									<input required="" type="date" class="form-control" id="postingDate" name="postingDate" value="<?php echo $postingDate; ?>" />
								</div>
							</div>
						</div>
<!-- Expire Date -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label"><?php echo $this->lang->line('content_jobPosting_expireDate_label'); ?></label> 
									<input required="" type="date" class="form-control" id="expireDate" name="expireDate" value="<?php echo $expireDate; ?>" />
								</div>
							</div>
						</div>
					<!-- Another Row -->

					

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveJobPosting()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadJobPostingListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadJobPostingListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

					<?php
					} ?>
					<div class="clearfix"></div>
					* <?php echo $this->lang->line('content_formRequired_label'); ?>
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

		<?php
		if ($role!=null && $role == ROLE_APPROVER_ADMIN) {
			if ($id != null) {
				?>
				<div class="card">
					<!-- div class="card-avatar">
							<a href="#pablo"> <img class="img"
								src="../assets/img/faces/marc.jpg">
							</a>
						</div-->
					<div class="card-header card-header-info">
						<h6 class="card-title"><?php echo $this->lang->line('content_specialLinks_label'); ?></h6>
					</div>
					<div class="card-body">
						<?php
								if ($isApproved == "1") {
									?>
							<button disabled class="btn btn-info"><?php echo $this->lang->line('content_approved_label'); ?></button>
						<?php
								} else {
									?>
							<button class="btn btn-success" onclick="approveJobPosting(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteJobPosting(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/jobPosting/jobPostingActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>