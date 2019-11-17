<!-- /**
 * Class : empTrainingForm (empTrainingForm View)
 * Emp Training Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */-->
<?php

$id = $empTraining->id;
// $field1 = $empTraining->field1;
$courseId = $empTraining->courseId;
$employeeId = $empTraining->employeeId;
$title = $empTraining->title;
$TrainingDetails = $empTraining->TrainingDetails;
$approverId = $empTraining->approverId;


$isApproved = $empTraining->isApproved;

$createdBy = $empTraining->createdBy;
$createdDate = $empTraining->createdDate;

$updatedBy = $empTraining->updatedBy;
$updatedDate = $empTraining->updatedDate;
?>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header card-header-info">
				<h4 class="card-title"><?php echo $this->lang->line('content_empTrainingForm_label'); ?></h4>
				<p class="card-category"><?php echo $this->lang->line('content_addFormSubtitle_label'); ?></p>
			</div>
			<div class="card-body">
				<!-- form role="form" action="<?php echo base_url() ?>empTraining/create"
					method="post" id="createEmpTraining" role="form"-->
				<input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />

				<div class="mdc-layout-grid__inner">
					<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="courseId" name="courseId">
                         <option value="0">Select Course</option>
                          <?php
                           if(!empty($courses)){
                               foreach ($courses as $course){
                                                    ?>
                                                    <option value="<?php echo $course->id; ?>" <?php if($course->id == $id) {echo "selected=selected";} ?>><?php echo $course->shortCode ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>
<div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="employeeId" name="employeeId">
                         <option value="0">Select Employee</option>
                          <?php
                           if(!empty($employees)){
                               foreach ($employees as $employee){
                                                    ?>
                                                    <option value="<?php echo $employee->id; ?>" <?php if($employee->id == $id) {echo "selected=selected";} ?>><?php echo $employee->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

<!-- Title -->
<div class="row">
							
							
							<div class="col-md-12">
								<div class="form-group bmd-form-group">
									<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_title_label'); ?></label> 
									<input required="" type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" />
								</div>
							</div>
						</div><div class="col-md-12">
						<div class="form-group bmd-form-group">
					    <select required="" class="form-control basic-select2" id="approverId" name="approverId">
                         <option value="0">Select Employee</option>
                          <?php
                           if(!empty($employees)){
                               foreach ($employees as $employee){
                                                    ?>
                                                    <option value="<?php echo $employee->id; ?>" <?php if($employee->id == $id) {echo "selected=selected";} ?>><?php echo $employee->lastName ?></option>
                                                    <?php
                                                }
                               }
                          ?>
                         </select>								</div>
							</div>

					<!-- Another Row -->

					<div class="card"><div class="card-header card-header-info"><h4><b><?php echo $this->lang->line('content_empTraining_trainingDetails_label'); ?></b><button class="btn btn-success btn-sm pull-right" onclick="addTrainingDetailsRow()"><i class="fa fa-plus"></i></button></h4>
</div><div class="card-body"><script>var subjectData = [
    <?php foreach ($subjects as $key=>$value) {
		  echo "'".$value->title."',";
	}?>];
var subjectSelectOptions =     <?php foreach ($subjects as $key=>$value) {		  echo "'<option value=".$value->id.">".$value->title."</option>'+";	}?> ';'
  </script><table id="trainingDetailsTable" class="table table-hover"><tr><th><?php echo $this->lang->line('content_empTraining_subjectId_label'); ?></th>
<th><?php echo $this->lang->line('content_empTraining_hourNo_label'); ?></th>
<th><?php echo $this->lang->line('content_empTraining_classDate_label'); ?></th>
<th><?php echo $this->lang->line('content_empTraining_isAttend_label'); ?></th>
<th><?php echo $this->lang->line('content_empTraining_remarks_label'); ?></th>
<th>Action</th></thead></tr><?php
                            if (!empty($trainingDetailss)) {
                                foreach ($trainingDetailss as $index => $trainingDetails) {
                                    ?>
                                  	<tr>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingDetails_subjectId_<?php echo $index;?>" value="<?php echo $trainingDetails->subjectId; ?>" data-style="select-with-transition" title="Single Select" data-size="7">
    <option disabled>Choose subject</option>
    <?php foreach ($subjects as $key=>$value) {
		if($key==$trainingDetails->subjectId)
{  echo "<option selected value=".$value->id.">".$value->title."</option>";}
		 else { echo "<option value=".$value->id.">".$value->title."</option>";}
	}?></select>	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Hour No</label> 
	<input required="" type="text" class="form-control" id="trainingDetails_hourNo_<?php echo $index;?>" value="<?php echo $trainingDetails->hourNo; ?>" name="trainingDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Class Date</label> 
	<input required="" type="date" class="form-control" id="trainingDetails_classDate_<?php echo $index;?>" value="<?php echo $trainingDetails->classDate; ?>" name="trainingDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating">Is Attend</label> 
	<input required="" type="checkbox" class="form-control" id="trainingDetails_isAttend_<?php echo $index;?>" value="<?php echo $trainingDetails->isAttend; ?>" name="trainingDetails[]">
	</div>
</td>
<td><div class="form-group bmd-form-group">
	<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_remarks_label'); ?></label> 
	<textarea required="" class="form-control" id="trainingDetails_remarks_<?php echo $index;?>" name="trainingDetails[]"><?php echo $trainingDetails->remarks; ?></textarea>
	</div>
</td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td>    								</tr>
                            		<?php
                                    }
                                } else {?>
 <tr><input type="hidden" placeholder="Enter Id" name="id[]" id="id_0"/>
<td><div class="form-group bmd-form-group">
	<select class="selectpicker basic-select2" id="trainingDetails_subjectId_0" data-style="select-with-transition" title="Single Select" data-size="7">
    <option selected>Choose subject</option>
    <?php foreach ($subjects as $key=>$value) {
		  echo "<option value=".$value->id.">".$value->title."</option>";
	}?></select>
			</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_hourNo_label'); ?></label> 
		<input required="" type="text" class="form-control" id="trainingDetails_hourNo_0" name="trainingDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_classDate_label'); ?></label> 
		<input required="" type="date" class="form-control" id="trainingDetails_classDate_0" name="trainingDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_isAttend_label'); ?></label> 
		<input required="" type="checkbox" class="form-control" id="trainingDetails_isAttend_0" name="trainingDetails[]" value="">
		</div></td>
<td><div class="form-group bmd-form-group">
		<label class="bmd-label-floating"><?php echo $this->lang->line('content_empTraining_remarks_label'); ?></label> 
		<textarea required="" class="form-control" id="trainingDetails_remarks_0" name="trainingDetails[]"></textarea>
		</div></td>

<td><button class="btn btn-danger btn-sm" onclick="deleteTrainingDetailsRow(null,this)" type="button"><i class="fa fa-trash"></i></button></td> </tr>							<?php	                         } ?></table></div></div>

					<?php
					if ($isApproved==null ||$isApproved=="" || $isApproved == "0") {
						?>
						<button onclick="saveEmpTraining()" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadEmpTrainingListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>
					<?php
					} else if ($isApproved == "1"){
						?>
						<button disabled="disabled" class="btn btn-success pull-right"><?php echo $this->lang->line('content_save_label'); ?></button>
						<button onclick="loadEmpTrainingListUI()" class='btn btn-warning pull-left'> <?php echo $this->lang->line('content_cancel_label'); ?></button>

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
							<button class="btn btn-success" onclick="approveEmpTraining(<?php echo $id; ?>)"><?php echo $this->lang->line('content_approve_label'); ?></button>
						<?php
								}
								?>
						<button class="btn btn-danger" onclick="deleteEmpTraining(<?php echo $id; ?>)"><?php echo $this->lang->line('content_delete_label'); ?></button>
					</div>

				</div>
			<?php } ?>
		<?php
		}
		?>
	</div>
</div>

<script src="<?php echo base_url(); ?>js/empTraining/empTrainingActions.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.basic-select2').select2();
		$('.basic-multiple-select2').select2();
	});
</script>